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

Sejak workflow `.github/workflows/deploy-cpanel.yml` dipasang, **cukup `git push`
dari laptop** — janjiara.com ikut berubah sendiri dalam satu sampai dua menit.
Tidak perlu lagi unggah berkas manual, tidak perlu lagi membuka cPanel untuk
menekan *Update from Remote* dan *Deploy HEAD Commit*.

Jalurnya tetap murni PHP. GitHub hanya mengirim berkas lewat SSH; yang
menyajikan situs tetap Apache + PHP di hosting. Tidak ada Node.js di server.

```
laptop  --git push-->  GitHub  --SSH-->  repo Git cPanel  --.cpanel.yml-->  public_html
```

### Penyiapan sekali saja

**1. Buat kunci SSH khusus deploy** (di laptop, jangan pakai kunci pribadi):

```bash
ssh-keygen -t ed25519 -C "github-deploy-janjiara" -f ~/.ssh/janjiara_deploy -N ""
```

Menghasilkan dua berkas: `janjiara_deploy` (rahasia) dan `janjiara_deploy.pub` (publik).

**2. Daftarkan kunci publik di cPanel** — menu *SSH Access* » *Manage SSH Keys* »
*Import Key*. Tempel isi `~/.ssh/janjiara_deploy.pub` ke kolom **Public Key**,
kosongkan kolom private key, simpan, lalu klik **Manage** » **Authorize**.
Tanpa langkah *Authorize* kuncinya terdaftar tapi tidak berlaku.

**3. Pastikan repo Git ada di cPanel** — menu *Git Version Control*. Kalau belum
ada, buat repo dengan *Repository Path* `repositories/janjiara-tema` (boleh
di-clone dari GitHub, boleh repo kosong — workflow akan mengisinya). Yang penting
jalurnya cocok dengan `REPO_PATH` di workflow.

**4. Isi secrets di GitHub** — repo » *Settings* » *Secrets and variables* »
*Actions* » *New repository secret*:

| Nama secret | Isi | Wajib |
|---|---|---|
| `CPANEL_SSH_KEY` | seluruh isi `~/.ssh/janjiara_deploy`, termasuk baris `-----BEGIN...` dan `-----END...` | ya |
| `CPANEL_HOST` | `janjiara.com`, atau hostname server dari cPanel kalau domain tidak menerima SSH | ya |
| `CPANEL_USER` | `jank1853` | ya |
| `CPANEL_SSH_PORT` | nomor port SSH hosting; **lewati kalau portnya 22** | tidak |

Banyak hosting Indonesia memakai port SSH selain 22. Nomornya tertulis di
cPanel » *SSH Access*, atau di email aktivasi hosting.

**5. Uji coba** — tab *Actions* di GitHub » *Deploy ke cPanel* » **Run workflow**.
Jalankan sekali tanpa push dulu, supaya kalau ada secret yang salah ketahuan
sebelum menyentuh kode.

### Apa yang dilakukan workflow

1. Mengambil isi `main` terbaru.
2. Mengirimnya lewat SSH ke repo Git di cPanel (`git push --force`). Dipakai
   `--force` karena repo cPanel itu tujuan deploy, bukan sumber kebenaran —
   yang berlaku selalu isi `main` di GitHub.
3. Memicu deploy cPanel lewat `uapi VersionControlDeployment create`, yang
   menjalankan aturan di `.cpanel.yml` seperti biasa.
4. Memeriksa `https://janjiara.com` sampai 3 menit: harus membalas `200` **dan**
   memuat judul halaman JANJIARA. Kalau tidak, workflow ditandai merah.

Karena `.cpanel.yml` tetap jadi satu-satunya aturan penyalinan berkas, tombol
*Deploy HEAD Commit* di cPanel juga masih berfungsi seperti dulu sebagai cadangan.

### Kalau deploy gagal

| Pesan di log Actions | Artinya |
|---|---|
| `Permission denied (publickey)` | kunci belum di-*Authorize* di cPanel, atau `CPANEL_USER` salah |
| `Tidak bisa menghubungi ... port` | port SSH salah, atau IP GitHub diblokir firewall hosting |
| `Repo tidak ada di /home/...` | repo belum dibuat di *Git Version Control*, atau jalurnya beda |
| `Gagal memicu deploy cPanel` | `uapi` tidak tersedia; deploy masih bisa dijalankan manual dari cPanel |
| `janjiara.com tidak membalas 200` | cek riwayat deploy di cPanel, dan pastikan tidak ada aplikasi Node.js yang merebut domain |

Berkas baru (misalnya gambar tema atau logo pembayaran) hanya ikut terkirim
kalau sudah di-`git add` dan di-commit. `git status` yang bersih sebelum push
adalah syaratnya.
