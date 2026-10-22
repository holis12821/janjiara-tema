#!/bin/sh
# ==========================================================================
# JANJIARA — deploy otomatis, dijalankan oleh Cron Job cPanel
# --------------------------------------------------------------------------
# Hosting janjiara.com (Rumahweb, paket shared) TIDAK membuka port SSH:
# port 22, 2222, 2211, 7822 dan port umum lainnya semuanya tertutup, hanya
# 80, 443 dan 2083 yang terbuka. Artinya GitHub Actions tidak punya jalan
# masuk ke server. Jadi arah pemicunya dibalik: SERVER yang menarik kode
# dari GitHub, bukan GitHub yang mendorong ke server.
#
# Skrip ini dipanggil Cron Job cPanel setiap beberapa menit. Kalau tidak ada
# commit baru, dia berhenti tanpa melakukan apa pun — murah dan senyap.
#
# Perintah penyalinan berkas TIDAK ditulis ulang di sini. Skrip membaca
# ulang daftar tugas dari .cpanel.yml, supaya aturannya tetap satu tempat
# dan tombol "Deploy HEAD Commit" di cPanel tetap memberi hasil yang sama.
#
# Pemasangan di cPanel » Cron Jobs (lihat README.md):
#   /bin/sh /home/jank1853/repositories/janjiara-tema/tools/deploy-cron.sh
# ==========================================================================
set -u

REPO=${REPO:-/home/jank1853/repositories/janjiara-tema}
CABANG=${CABANG:-main}
LOG=${LOG:-$HOME/janjiara-deploy.log}
KUNCI=${KUNCI:-$HOME/.janjiara-deploy.lock}

# Cron memberi PATH yang sangat minim. Git di server cPanel bisa ada di
# salah satu dari dua tempat ini.
PATH="/usr/local/bin:/usr/bin:/bin:/usr/local/cpanel/3rdparty/bin:$PATH"
export PATH

catat() { echo "$(date '+%Y-%m-%d %H:%M:%S')  $*" >> "$LOG"; }

# --- satu proses saja ------------------------------------------------------
# mkdir bersifat atomik, jadi aman dipakai sebagai kunci. Kalau deploy
# sebelumnya masih jalan, yang ini berhenti dan menunggu jadwal berikutnya.
if ! mkdir "$KUNCI" 2>/dev/null; then
  # Kunci yang tertinggal lebih dari 30 menit dianggap sampah dari proses
  # yang mati di tengah jalan, lalu dibersihkan.
  if [ -n "$(find "$KUNCI" -maxdepth 0 -mmin +30 2>/dev/null)" ]; then
    catat "Kunci basi dibersihkan."
    rmdir "$KUNCI" 2>/dev/null
  fi
  exit 0
fi
trap 'rmdir "$KUNCI" 2>/dev/null' EXIT INT TERM

cd "$REPO" 2>/dev/null || { catat "GAGAL: repo tidak ada di $REPO"; exit 1; }
command -v git >/dev/null 2>&1 || { catat "GAGAL: perintah git tidak ditemukan"; exit 1; }

# --- adakah commit baru? ---------------------------------------------------
if ! git fetch --quiet origin "$CABANG" 2>>"$LOG"; then
  catat "GAGAL: tidak bisa menghubungi GitHub."
  exit 1
fi

lama=$(git rev-parse HEAD 2>/dev/null)
baru=$(git rev-parse "origin/$CABANG" 2>/dev/null)

if [ "$lama" = "$baru" ]; then
  exit 0   # tidak ada yang berubah — diam saja, jangan kotori log
fi

catat "Commit baru: $(echo "$lama" | cut -c1-7) -> $(echo "$baru" | cut -c1-7)"

# --- ambil kode terbaru ----------------------------------------------------
# reset --hard, bukan pull: repo di server adalah cermin GitHub, bukan
# tempat mengedit. Perubahan lokal apa pun di sini memang harus dibuang.
if ! git reset --hard --quiet "origin/$CABANG" 2>>"$LOG"; then
  catat "GAGAL: git reset tidak berhasil."
  exit 1
fi

# --- jalankan aturan .cpanel.yml ------------------------------------------
# Daftar tugas dibaca langsung dari .cpanel.yml supaya tidak ada aturan
# penyalinan yang ditulis dua kali di dua berkas berbeda.
# Kutip pembungkus YAML (kalau suatu saat ada tugas yang ditulis dengan
# tanda kutip) dilucuti juga — tanpa itu sh akan mengira seluruh barisnya
# adalah satu nama perintah.
tugas=$(sed -n '/^ *tasks:/,$ s/^ *- //p' .cpanel.yml \
        | sed -e "s/^'\(.*\)'$/\1/" -e 's/^"\(.*\)"$/\1/')
if [ -z "$tugas" ]; then
  catat "GAGAL: tidak ada tugas yang terbaca dari .cpanel.yml"
  exit 1
fi

if keluaran=$(printf '%s\n' "$tugas" | sh -e 2>&1); then
  catat "BERHASIL deploy $(echo "$baru" | cut -c1-7)"
  printf '%s\n' "$keluaran" | sed 's/^/    /' >> "$LOG"
else
  catat "GAGAL saat menjalankan tugas .cpanel.yml:"
  printf '%s\n' "$keluaran" | sed 's/^/    /' >> "$LOG"
  exit 1
fi

# --- jaga ukuran log -------------------------------------------------------
if [ "$(wc -l < "$LOG" 2>/dev/null || echo 0)" -gt 500 ]; then
  tail -n 300 "$LOG" > "$LOG.tmp" && mv "$LOG.tmp" "$LOG"
fi
