# Panduan upload JANJIARA ke cPanel dengan domain .com

Halaman utama sekarang bernama **index.php**. Di cPanel file ini otomatis dibuka sebagai halaman utama domain. Isinya tetap HTML biasa, jadi tidak perlu database atau pengaturan PHP apa pun.

---

## 1. File yang diupload

| Upload | Jangan upload |
| --- | --- |
| `index.php` — landing page & Form Order | `.git/` — riwayat Git |
| `.htaccess` — HTTPS, cache, keamanan | `tema-src/` — sumber gambar ±400 MB, tidak dipakai halaman |
| `assets/` — QRIS & logo pembayaran | `README.md`, `PANDUAN_UPLOAD_CPANEL.md` |
| `tema/` — 433 gambar tema (±21 MB) | `.DS_Store`, `.gitignore`, `.nojekyll` |
| `video/` — video ucapan & poster (±27 MB) | |
| `brand/` — favicon & logo | |

Total yang diupload sekitar **50 MB**.

### Buat zip di Mac (cara tercepat)

Buka **Terminal**, lalu jalankan:

```bash
cd ~/Documents/janjiara-tema
zip -r ~/Desktop/janjiara-upload.zip index.php .htaccess assets tema video brand -x "*.DS_Store"
```

File `janjiara-upload.zip` akan muncul di Desktop.

---

## 2. Arahkan domain .com ke hosting

Pilih **salah satu** cara.

**A. Ganti nameserver (paling mudah).**
1. Buka email selamat datang dari hosting, atau menu *General Information* di cPanel, lalu catat nameserver hosting (contoh `ns1.namahosting.com` dan `ns2.namahosting.com`).
2. Login ke tempat membeli domain, buka pengaturan **Nameserver**, lalu ganti dengan nameserver hosting.

**B. Pakai DNS A record** (bila DNS dikelola di tempat lain, misalnya Cloudflare).
1. Di cPanel, buka *General Information* → catat **Shared IP Address**.
2. Di pengelola DNS, buat record **A** `@` → IP tersebut dan record **CNAME** `www` → `namadomain.com`.

Perubahan DNS butuh beberapa menit sampai 24 jam.

---

## 3. Siapkan folder domain di cPanel

- **Domain utama akun hosting:** folder webnya adalah `public_html`.
- **Domain tambahan:** buka **Domains → Create A New Domain**, isi `namadomain.com`. Matikan centang *Share document root*, lalu catat foldernya (contoh `public_html/namadomain.com`).

---

## 4. Upload & ekstrak

1. Buka **File Manager**. Di kanan atas, klik **Settings**, lalu centang **Show Hidden Files (dotfiles)** supaya `.htaccess` terlihat.
2. Masuk ke folder domain (`public_html` atau folder domain tambahan).
3. Hapus file bawaan hosting bila ada (`index.html`, `default.html`, `cgi-bin` boleh dibiarkan).
4. Klik **Upload**, lalu pilih `janjiara-upload.zip` dan tunggu sampai 100%.
5. Kembali ke folder, klik kanan zip → **Extract** → **Extract Files**.
6. Pastikan `index.php`, `.htaccess`, `assets`, `tema`, `video`, dan `brand` berada **langsung** di folder domain, tidak di dalam subfolder lain.
7. Hapus `janjiara-upload.zip` setelah diekstrak.

---

## 5. Pasang SSL (HTTPS)

1. Buka **SSL/TLS Status**, lalu klik **Run AutoSSL**. Hosting memasang sertifikat gratis untuk `namadomain.com` dan `www.namadomain.com`.
2. Setelah statusnya hijau, buka `https://namadomain.com`. File `.htaccess` sudah otomatis mengalihkan `http://` ke `https://`.
3. **Bila memakai Cloudflare:** atur *SSL/TLS → Full (strict)*. Jangan pakai mode *Flexible*, karena mode itu bisa menimbulkan error *too many redirects* seperti yang pernah terjadi di webinvit. `.htaccess` sudah disiapkan untuk mencegahnya.

---

## 6. Cek setelah online

- [ ] Halaman utama terbuka di HP & laptop, animasi amplop muncul sekali.
- [ ] Gambar tema di katalog dan video ucapan tampil.
- [ ] **Form Order** → isi data → **Kirim pesanan & lanjut ke pembayaran**.
- [ ] Halaman pembayaran: nomor BCA/Jago/DANA/GoPay/ShopeePay bisa disalin, gambar QRIS muncul dan bisa diperbesar.
- [ ] Tombol **Saya sudah bayar** membuka WhatsApp admin berisi rincian pesanan + pembayaran.
- [ ] Pesanan pertama dari domain baru: buka email **janjiara.digital@gmail.com**. Bila ada email aktivasi dari FormSubmit, klik **Activate** supaya salinan pesanan masuk ke email.
- [ ] Ganti link di bio Instagram, TikTok, Threads, dan WhatsApp Business ke `https://namadomain.com`.

---

## 7. Mengubah isi nanti

| Yang diubah | Caranya |
| --- | --- |
| Teks, harga, atau form | Ganti `index.php` saja (upload & timpa) |
| Kuota promo habis sebelum 4 Nov | Di `index.php` cari `kuotaHabis: false`, ubah menjadi `kuotaHabis: true` |
| Nomor rekening / e-wallet | Di `index.php` cari `const JJ_BAYAR` |
| QRIS baru (misalnya QRIS merchant JANJIARA) | Timpa `assets/qris-shopeepay.png`, atau ubah bagian `qris-toko` di `JJ_BAYAR` (hapus `soon: true`, isi `qr: "assets/nama-file.png"`) |
| Logo resmi pembayaran | Lihat `assets/pay/README.txt` |
| Animasi pembuka undangan tampil lagi setelah berapa hari | Di `index.php` cari `JEDA_HARI = 7`, ganti angkanya (contoh `3` atau `14`) |
| Tema atau video baru | Upload file ke `tema/` atau `video/` (di hosting **dan** di repo GitHub), lalu tambahkan barisnya di `index.php`. Bila gambarnya sudah berupa kartu berlatar, tambahkan juga warnanya di `JJ_TEMA_WARNA` (opsional) |
| Gambar tema di repo GitHub diperbarui | Gambar tema & poster video diambil dari jsDelivr yang dikunci ke satu commit. Di `index.php` cari `const JJ_CDN`, ganti kode commit di dalamnya dengan commit terbaru repo. Bila CDN gagal, halaman otomatis memakai folder `tema/` & `video/poster/` di hosting |

Setelah upload ulang, buka halaman dengan **Ctrl+F5** (atau tarik-segarkan di HP) supaya versi terbaru tampil.
