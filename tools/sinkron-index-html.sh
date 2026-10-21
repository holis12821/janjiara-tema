#!/usr/bin/env bash
# ==========================================================================
# JANJIARA — buat index.html dari index.php
# --------------------------------------------------------------------------
# index.php adalah satu-satunya berkas landing page yang diedit manual.
# index.html hanya hasil render-nya, dipakai sebagai cadangan di GitHub Pages
# (Pages tidak bisa menjalankan PHP).
#
# Dipakai oleh .github/workflows/sinkron-index-html.yml dan bisa dijalankan
# manual dari laptop:   bash tools/sinkron-index-html.sh
# ==========================================================================
set -euo pipefail

cd "$(dirname "$0")/.."

sumber="index.php"
hasil="index.html"
minimal=300000   # landing page utuh ~370 KB; di bawah ini berarti render terpotong

[ -f "$sumber" ] || { echo "Error: $sumber tidak ditemukan."; exit 1; }
command -v php >/dev/null || { echo "Error: PHP belum terpasang."; exit 1; }

sementara="$(mktemp)"
trap 'rm -f "$sementara"' EXIT

php "$sumber" > "$sementara"

# Banner peringatan, ditaruh SETELAH <!doctype html> supaya tidak memicu quirks mode
banner='<!-- DIBUAT OTOMATIS dari index.php oleh tools/sinkron-index-html.sh — jangan diedit langsung. -->'
awk -v b="$banner" 'NR==1 { print; print b; next } { print }' "$sementara" > "$sementara.final"
mv "$sementara.final" "$sementara"

# --- pemeriksaan hasil ---
if grep -q '<?php' "$sementara"; then
  echo "Error: masih ada tag <?php di hasil render."; exit 1
fi
ukuran=$(wc -c < "$sementara")
if [ "$ukuran" -lt "$minimal" ]; then
  echo "Error: hasil hanya ${ukuran} bytes (minimal ${minimal}). Render kemungkinan terpotong."; exit 1
fi
if ! grep -q 'var seen = false;' "$sementara"; then
  echo "Error: penanda intro amplop tidak ditemukan atau tidak bernilai false."; exit 1
fi

mv "$sementara" "$hasil"
trap - EXIT
chmod 644 "$hasil"
echo "$hasil diperbarui dari $sumber (${ukuran} bytes)."
