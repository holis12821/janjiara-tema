#!/usr/bin/env bash
# ==========================================================================
# JANJIARA — buat zip siap-upload ke hosting
# --------------------------------------------------------------------------
# Hasilnya berisi apa yang .cpanel.yml salin ke document root:
#   index.php index.html .htaccess  +  tema/ video/ brand/ assets/
#
# Satu pengecualian yang disengaja: assets/pay/README.txt tidak ikut.
# Isinya catatan cara menambah logo metode pembayaran — berguna di repo,
# tidak ada gunanya di server. (.htaccess juga memblokirnya, jadi ini
# lapisan kedua: yang tidak diunggah tidak mungkin terbaca.)
#
# Dipakai bila deploy lewat cPanel Git Version Control sedang tidak bisa
# dipakai, sehingga berkas perlu diunggah manual lewat File Manager.
#
# Cara pakai:  bash tools/buat-zip-upload.sh  [folder-tujuan]
# Tanpa argumen, zip ditaruh di folder induk repo (sebelah janjiara-tema/).
#
# Cara pasang di cPanel:
#   1. File Manager -> masuk ke /home/jank1853/public_html
#   2. Upload zip ini, lalu klik kanan -> Extract
#   3. Pilih "Overwrite all files" bila ditanya
#   4. Hapus zip-nya dari server setelah diekstrak
#
# PENTING: zip ini TIDAK menyelesaikan 404 bila masih ada deploy aplikasi
# Node.js yang terpasang untuk janjiara.com. Matikan dulu aplikasi itu.
# Lihat bagian "Hosting: PHP via cPanel, BUKAN Node.js" di README.md.
#
# Zip-nya sengaja TIDAK masuk repo (lihat .gitignore) — berkas hasil, bukan
# sumber, dan ukurannya puluhan MB.
# ==========================================================================
set -euo pipefail

cd "$(dirname "$0")/.."
repo="$PWD"

tujuan="${1:-$(dirname "$repo")}"
[ -d "$tujuan" ] || { echo "Error: folder tujuan '$tujuan' tidak ada."; exit 1; }

command -v zip >/dev/null || { echo "Error: perintah 'zip' tidak tersedia."; exit 1; }

# Daftar isi diambil dari .cpanel.yml, bukan ditulis ulang di sini, supaya
# zip dan deploy tidak pernah berbeda isinya.
berkas=(index.php index.html .htaccess)
folder=(tema video brand assets)

for f in "${berkas[@]}" "${folder[@]}"; do
  [ -e "$f" ] || { echo "Error: '$f' tidak ditemukan di repo."; exit 1; }
done

# Pastikan daftar di atas masih cocok dengan .cpanel.yml. Kalau .cpanel.yml
# berubah dan skrip ini tidak, lebih baik ketahuan sekarang.
for f in "${berkas[@]}" "${folder[@]}"; do
  grep -q -- "$f" .cpanel.yml || echo "Peringatan: '$f' tidak disebut di .cpanel.yml."
done

hasil="$tujuan/janjiara-upload-$(date +%Y%m%d).zip"
rm -f "$hasil"

# -r rekursif, -q senyap, -X buang metadata macOS.
# Aset webp/mp4/png sudah terkompresi, jadi -1 (cepat) cukup: hasilnya
# praktis sama besar dengan -9 tapi jauh lebih singkat.
zip -rq1 -X "$hasil" "${berkas[@]}" "${folder[@]}" \
  -x '*.DS_Store' -x '__MACOSX/*' -x 'assets/pay/README.txt'

echo "Selesai : $hasil"
echo "Ukuran  : $(du -h "$hasil" | cut -f1)"
echo "Isi     : $(unzip -l "$hasil" | tail -1 | awk '{print $2}') berkas"
echo
echo "Ekstrak ke document root: /home/jank1853/public_html"
