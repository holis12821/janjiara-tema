# janjiara-tema

Gambar thumbnail katalog tema undangan digital **JANJIARA** (WebP 600×600), dipakai oleh landing page lewat jsDelivr CDN.

## Format link

```
https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@VERSI/tema/SLUG.webp
```

Contoh: https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@main/tema/adat-jawa.webp

- `SLUG` = nama file tema, huruf kecil, tanda hubung tetap (sama dengan slug preview `https://janjiaradigital.webinvit.id/preview/SLUG`).
- `VERSI` = tag rilis (mis. `v1.0.0`). Link dengan tag di-cache permanen oleh jsDelivr, jadi cepat dan stabil.

## Menambah tema baru

1. Simpan gambar sebagai `tema/slug.webp` (persegi, ±600×600, WebP).
2. Commit & push, lalu buat tag baru: `git tag v1.0.1 && git push origin v1.0.1`.
3. Di HTML landing page, ubah `JJ_IMG_BASE` ke `@v1.0.1` dan tambah satu baris di `JJ_TEMA`.

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
<link rel="icon" type="image/svg+xml" href="https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@main/brand/favicon/janjiara-favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@main/brand/favicon/janjiara-favicon-32.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@main/brand/favicon/janjiara-favicon-180.png">
```
