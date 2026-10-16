# janjiara-tema

Gambar thumbnail katalog tema undangan digital **JANJIARA** (WebP 600×600), dipakai oleh landing page lewat jsDelivr CDN.

## Format link

```
https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@VERSI/tema/SLUG.webp
```

Contoh: https://cdn.jsdelivr.net/gh/holis12821/janjiara-tema@v1.0.0/tema/adat-jawa.webp

- `SLUG` = nama file tema, huruf kecil, tanda hubung tetap (sama dengan slug preview `https://janjiaradigital.webinvit.id/preview/SLUG`).
- `VERSI` = tag rilis (mis. `v1.0.0`). Link dengan tag di-cache permanen oleh jsDelivr, jadi cepat dan stabil.

## Menambah tema baru

1. Simpan gambar sebagai `tema/slug.webp` (persegi, ±600×600, WebP).
2. Commit & push, lalu buat tag baru: `git tag v1.0.1 && git push origin v1.0.1`.
3. Di HTML landing page, ubah `JJ_IMG_BASE` ke `@v1.0.1` dan tambah satu baris di `JJ_TEMA`.
