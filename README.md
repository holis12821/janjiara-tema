# janjiara-tema

Gambar thumbnail katalog tema undangan digital **JANJIARA** (WebP 600×600), dipakai oleh landing page.

Sejak v10 **semua aset di-host sendiri** di hosting cPanel `janjiara.com` — tidak lagi lewat
jsDelivr/CDN GitHub. Folder `tema/`, `video/`, `video/poster/`, `brand/` dan `assets/`
diunggah ke hosting bersama `index.php`.

## Format link

```
https://janjiara.com/tema/SLUG.webp
```

Contoh: https://janjiara.com/tema/adat-jawa.webp

- `SLUG` = nama file tema, huruf kecil, tanda hubung tetap (sama dengan slug preview `https://janjiaraundangan.webinvit.id/preview/SLUG`).
- Alamat dasar diatur di satu tempat: konstanta `JJ_CDN` di `index.php` (cari `const JJ_CDN`).
  Ganti domain cukup di baris itu.

## Menambah tema baru

1. Simpan gambar sebagai `tema/slug.webp` (persegi, ±600×600, WebP).
2. Di `index.php`, tambah satu baris di `JJ_TEMA`.
3. Unggah `tema/slug.webp` ke folder `tema/` di hosting cPanel, lalu commit & push.
   Tidak ada cache CDN lagi — gambar langsung tampil begitu file ada di hosting.
4. **Pastikan slug-nya sudah terbit** di `https://janjiaraundangan.webinvit.id/preview/SLUG`.
   Kalau 404, tombol "Preview" di kartu tema akan membuka halaman kosong.

## Visibilitas repo

Landing page **tidak lagi bergantung pada visibilitas repo**: sejak aset di-host sendiri
di `janjiara.com`, memprivatkan repo tidak lagi merusak gambar tema atau video.
Yang ikut mati bila repo diprivat hanyalah cadangan GitHub Pages.

Dokumen bisnis tetap disimpan di luar repo (lihat `.gitignore`).

## Tema yang dihapus (18 Oktober 2026)

Isi folder `tema/` **harus cocok satu-satu** dengan daftar `JJ_TEMA` di landing page,
dan setiap slug harus punya halaman preview di platform undangan mitra. Pada 18 Oktober
2026, 26 tema dihapus dari repo dan dari katalog:

- **25 tema** karena slug-nya belum terbit di platform mitra, sehingga tombol "Preview"
  menuju halaman 404. Temanya memang belum tersedia di sana, bukan salah penamaan —
  sudah diuji dengan puluhan variasi nama. Bila nanti mitra menerbitkannya, gambar dan
  baris `JJ_TEMA`-nya tinggal dikembalikan.
  <br>`adat-bugis` `amalia` `bali-watercolor` `blue-lotus` `blue-underated` `deep-space`
  `exclusive-lunch` `fantasy-wedding` `image` `jawa-palembang2` `jawa-sumbawa`
  `maroon-flower` `nabila` `pastel-flowers` `pastel-flowers2` `pestapora` `pink-lovely`
  `pyramid` `retro-1` `reuni-akbar` `sakura-gray` `suffolk-house` `vintage-blue`
  `vintage-pink` `wijaya-kusuma`
- **1 tema** (`2tahun-uici`) karena namanya tampil janggal di katalog ("2tahun Uici").

Tiga tema lain hanya salah nama file, jadi di-rename agar cocok dengan slug di platform:

| Nama file lama | Nama file sekarang | Judul di platform |
|---|---|---|
| `Wedding-Salsa.webp` | `salsa.webp` | Wedding - Salsa |
| `aceh-palembang.webp` | `palembang-aceh.webp` | Wedding - Palembang Aceh |
| `year-and-gathering.webp` | `year-end-gathering.webp` | Umum & Seminar - Year End Gathering |

Jumlah tema sekarang: **433**.

## Video ucapan

Folder `video/` berisi contoh video ucapan (MP4 H.264, vertikal 9:16, 540x960) beserta
poster thumbnail-nya di `video/poster/` (WebP 540x960).

```
Video  : video/SLUG.mp4                              (relatif terhadap halaman)
Poster : https://janjiara.com/video/poster/SLUG.webp
```

Contoh: https://janjiara.com/video/natal-tahun-baru-001.mp4

| Slug | Kategori |
|---|---|
| `natal-tahun-baru-001` … `-004` | Natal |
| `natal-tahun-baru-005`, `-006` | Tahun Baru |

### Menambah video baru

1. Kompres dulu ke 540x960 — video mentah 1080x1920 (26-42 MB) terlalu berat untuk
   dimuat di halaman. Perintah yang dipakai:

   ```sh
   ffmpeg -i asli.mp4 -vf "scale=540:-2:flags=lanczos" -c:v libx264 -profile:v high \
     -preset slow -crf 26 -maxrate 2000k -bufsize 4000k -pix_fmt yuv420p \
     -c:a aac -b:a 96k -movflags +faststart video/slug.mp4

   ffmpeg -ss 6 -i asli.mp4 -frames:v 1 -vf "scale=540:-2:flags=lanczos" /tmp/f.png
   cwebp -q 82 -m 6 /tmp/f.png -o video/poster/slug.webp
   ```

2. Unggah `video/slug.mp4` dan `video/poster/slug.webp` ke hosting, lalu commit & push.
3. Di `index.php`, tambah satu baris di `JJ_VIDEO`
   (cari komentar "KATALOG VIDEO UCAPAN").

## Favicon JANJIARA

Folder `brand/favicon/` berisi ikon tab browser (monogram JA):

| File | Kegunaan |
|---|---|
| `janjiara-favicon.svg` | Favicon utama (Chrome, Edge, Firefox) |
| `janjiara-favicon-32.png` | Cadangan PNG untuk browser yang belum mendukung SVG |
| `janjiara-favicon-180.png` | `apple-touch-icon` (iPhone/iPad, saat disimpan ke layar utama) |
| `favicon.ico`, `-16/-48/-192/-512.png` | Ukuran lain bila dibutuhkan |

Contoh di `<head>`:

```html
<link rel="icon" type="image/svg+xml" href="https://janjiara.com/brand/favicon/janjiara-favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="https://janjiara.com/brand/favicon/janjiara-favicon-32.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://janjiara.com/brand/favicon/janjiara-favicon-180.png">
```

## Landing page (`index.php`)

`index.php` adalah **satu-satunya** berkas landing page yang diedit manual. Isinya HTML
biasa; PHP hanya dipakai di blok kecil paling atas untuk penanda intro amplop
(session + cookie), lihat bagian berikutnya.

Dipakai untuk tiga hal:

1. **Hosting cPanel** — berkas utama yang dijalankan server
2. **GitHub Pages** — tersaji di **https://holis12821.github.io/janjiara-tema/** lewat `index.html`
3. **Dashboard webinvit** — isinya dicopy apa adanya ke halaman di dashboard

### `index.html` dibuat otomatis — jangan diedit

GitHub Pages tidak bisa menjalankan PHP, jadi `index.html` tetap dibutuhkan sebagai
cadangan di sana. Berkas itu **dibuat ulang otomatis** dari `index.php` oleh
`.github/workflows/sinkron-index-html.yml` setiap kali `index.php` di-push ke `main`.

- Edit `index.php` saja. Perubahan yang ditulis langsung ke `index.html` akan tertimpa.
- Menjalankan manual dari laptop: `bash tools/sinkron-index-html.sh`
- Sumbernya satu, jadi tidak ada lagi dua berkas yang bisa beda versi — masalah yang
  dulu terjadi pada salinan `janjiara-landing-page.html` dan sudah dihapus.

### Catatan landing page

- Tetap bisa dibuka walaupun server webinvit sedang gangguan: favicon ditanam inline
  (data URI), gambar tema & video diambil dari hosting `janjiara.com` sendiri, jadi
  halamannya mandiri dan tidak bergantung pada webinvit maupun CDN pihak ketiga.
- **Saat upload ke cPanel**, sertakan folder `tema/`, `video/`, `video/poster/`,
  `brand/` dan `assets/` di sebelah `index.php`. Tanpa folder-folder itu gambar tema
  dan video tidak muncul (tidak ada lagi CDN sebagai cadangan).
- Tombol pesan, katalog tema, dan pilihan paket tetap mengarah ke WhatsApp admin; menu Masuk dan preview tema tetap ke `janjiaradigital.webinvit.id`.
- `.nojekyll` memastikan file disajikan apa adanya.
- Membuka `index.php` dengan klik dua kali (`file://`) tidak lagi bekerja — PHP butuh
  server. Untuk melihat hasilnya di laptop: `php -S localhost:8000 -t .` lalu buka
  <http://localhost:8000/>.

Aktifkan sekali: **Settings → Pages → Build and deployment → Source: Deploy from a branch → Branch: `main` / `(root)` → Save.**



## Hosting: PHP via cPanel, BUKAN Node.js

**janjiara.com harus disajikan Apache + PHP, bukan static server Node.js.**

Pernah ada deploy aplikasi Node.js terpasang untuk domain ini, dengan log seperti:

```
Deploying "janjiara-tema" (category: static, image: docker.io/library/node:22).
Pulling the latest source.
No dependency manifest; skipping the build and serving the files as-is.
Applying the current configuration and starting the application.
```

Itu **penyebab janjiara.com selalu 404**, bukan sisa `.htaccess` situs lama seperti
yang sempat dicatat keliru di `.cpanel.yml`. Aplikasi Node itu merebut seluruh
permintaan ke domain, sehingga Apache, `.htaccess` dan PHP tidak pernah kebagian.

Cara mengenalinya dari luar (semua terukur 22 Okt 2026):

| Gejala | Artinya |
|---|---|
| Halaman 404 identik (utf-8, 1641 B) untuk **semua** jalur, termasuk `/cgi-bin/` dan `/.well-known/` | satu proses aplikasi menelan semua permintaan |
| 404 yang sama untuk `GET`, `POST`, `PUT`, `OPTIONS` | bukan Apache yang melayani folder |
| `/index.html` → 301 `/index` → 301 `/` | *clean URLs* bawaan static server Node |
| Halaman galat bergaya Vercel `serve` | paket static server Node yang umum |

Bandingkan: Apache yang melayani folder membalas galat `iso-8859-1` dan
memperlakukan `/cgi-bin/` serta metode non-GET secara berbeda.

### Kenapa Node.js tidak bisa dipakai di sini

- **Static server Node tidak bisa menjalankan PHP.** Tidak ada setting untuk itu.
  `index.php` akan dikirim sebagai **teks biasa** — seluruh kode sumber terbaca publik.
- **`.htaccess` diabaikan sepenuhnya.** Rute `/favicon.ico` dan `/apple-touch-icon.png`,
  `Options -MultiViews`, header keamanan, blokir `README.txt`, dan cache 30 hari
  semuanya mati.
- **Blok PHP penanda intro amplop** (session + cookie di bagian atas `index.php`)
  tidak jalan.

### Yang harus dilakukan

1. Di panel hosting, **hapus atau hentikan** aplikasi/deploy Node.js untuk
   `janjiara.com`. Selama masih aktif, deploy cPanel tidak akan mengubah apa pun
   yang terlihat di browser.
2. Pastikan domain kembali disajikan dari document root Apache
   (`/home/jank1853/public_html`), bukan dari aplikasi.
3. Baru jalankan **Git Version Control → Update from Remote → Deploy HEAD Commit**.
4. Log deploy harus memuat `Document root ditemukan: /home/jank1853/public_html`.
   Bila deploy gagal sebelum baris itu, jalurnya salah — ambil jalur yang benar dari
   cPanel » Domains, kolom *Document Root*, lalu ubah `DEPLOYPATH` di `.cpanel.yml`.

Setelah itu, penanda bahwa PHP benar-benar jalan: `https://janjiara.com/favicon.ico`
membalas `200 image/x-icon` (aturan dari `.htaccess`), dan `https://janjiara.com/index`
membalas `404` — bukan dibelokkan ke `/`.

## Deploy otomatis dari GitHub

Setelah disiapkan, **cukup `git push` dari laptop** — janjiara.com ikut berubah
sendiri paling lama 5 menit kemudian. Tidak ada lagi unggah berkas manual,
tidak ada lagi klik *Update from Remote* dan *Deploy HEAD Commit* di cPanel.

### Kenapa caranya begini, bukan lewat GitHub Actions

Hosting janjiara.com (Rumahweb, paket shared) **tidak membuka port SSH**.
Hasil pemeriksaan 22 Oktober 2026: port 22, 2222, 2200, 2211, 7822, 65002,
64000, 18765, 2020 dan 2022 semuanya tertutup; yang terbuka hanya 80, 443
dan 2083. Di cPanel pun tidak ada menu *SSH Access*, hanya *Git Version Control*.

Artinya GitHub tidak punya jalan masuk ke server — pendekatan apa pun yang
mengandalkan GitHub Actions menyambung ke hosting pasti gagal. Jadi arah
pemicunya dibalik:

```
laptop --git push--> GitHub <--git fetch-- Cron Job cPanel --.cpanel.yml--> public_html
                               (server yang menarik, tiap 5 menit)
```

Ini juga sebabnya **tidak perlu kunci SSH, tidak perlu GitHub Secrets, dan
tidak perlu token apa pun**. Repo ini publik, jadi server cukup menariknya.

### Penyiapan sekali saja

**1. Repo sudah ada di cPanel** — menu *Git Version Control*, hasil clone dari
`https://github.com/holis12821/janjiara-tema.git`. Catat *Repository Path*-nya;
yang dipakai di bawah ini `/home/jank1853/repositories/janjiara-tema`.

**2. Buat Cron Job** — cPanel » *Cron Jobs* (bagian *Advanced*).

- *Common Settings*: pilih **Every 5 Minutes** (`*/5 * * * *`)
- *Command*: tempel satu baris ini

```
/bin/sh /home/jank1853/repositories/janjiara-tema/tools/deploy-cron.sh
```

Klik **Add New Cron Job**. Selesai — tidak ada langkah lain.

**3. Uji** — ubah apa saja, `git push`, tunggu sampai 5 menit, buka janjiara.com.

### Cara kerjanya

Setiap 5 menit `tools/deploy-cron.sh` dijalankan, lalu:

1. `git fetch` ke GitHub, bandingkan commit server dengan commit `main`.
2. **Kalau sama, berhenti tanpa melakukan apa-apa** — tidak menyalin berkas,
   tidak menulis log. Jadi cron tiap 5 menit tidak membebani hosting.
3. Kalau ada commit baru: `git reset --hard origin/main`, lalu menjalankan
   daftar tugas yang dibaca **langsung dari `.cpanel.yml`**.

Poin ketiga itu disengaja: perintah penyalinan berkas tidak ditulis ulang di
skrip. `.cpanel.yml` tetap satu-satunya tempat aturan deploy, jadi tombol
*Deploy HEAD Commit* di cPanel memberi hasil yang persis sama dan tetap bisa
dipakai kapan saja sebagai cadangan manual.

Ada pengunci (`~/.janjiara-deploy.lock`) supaya dua deploy tidak pernah jalan
bersamaan kalau satu deploy kebetulan lebih lama dari 5 menit.

### Melihat hasilnya

Log ada di `~/janjiara-deploy.log` (buka lewat cPanel » *File Manager*,
di folder home, bukan di `public_html`). Isinya hanya deploy yang benar-benar
terjadi:

```
2026-10-22 22:59:20  Commit baru: 22729be -> 8a96142
2026-10-22 22:59:21  BERHASIL deploy 8a96142
    Document root ditemukan: /home/jank1853/public_html
    Deploy JANJIARA selesai. Document root: /home/jank1853/public_html
```

Log dipangkas otomatis kalau sudah lebih dari 500 baris.

### Kalau tidak jalan

| Isi log | Artinya |
|---|---|
| log tidak pernah dibuat | cron belum jalan — cek penulisan *Command*, dan pastikan *Repository Path* cocok |
| `GAGAL: repo tidak ada di ...` | jalur repo berbeda; sesuaikan baris `REPO=` di `tools/deploy-cron.sh` |
| `GAGAL: perintah git tidak ditemukan` | git tidak ada di PATH cron; tambahkan jalurnya di bagian `PATH=` skrip |
| `GAGAL: tidak bisa menghubungi GitHub` | hosting memblokir keluar ke github.com — hubungi Rumahweb |
| `GAGAL saat menjalankan tugas` | baris `test -f` di `.cpanel.yml` gagal; berkas yang disebut belum di-commit |

Berkas baru (gambar tema, logo pembayaran) hanya ikut terdeploy kalau sudah
di-`git add` dan di-commit. Pastikan `git status` bersih sebelum push.

### Kalau ingin deploy instan (opsional)

5 menit terasa lama? Perkecil jadwal cron jadi *Every Minute* (`* * * * *`).
Karena skrip langsung berhenti saat tidak ada commit baru, bebannya tetap kecil.
