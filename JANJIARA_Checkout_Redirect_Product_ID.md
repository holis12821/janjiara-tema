# JANJIARA — Checkout Redirect & Pemilihan Tema

## 1. Tujuan

Sesuaikan perilaku checkout JANJIARA berdasarkan status fitur **Checkout Otomatis** pada platform reseller Satu Momen.

- Jika **Checkout Otomatis aktif**, pertahankan workflow checkout existing.
- Jika **Checkout Otomatis nonaktif**, alihkan pelanggan dari URL checkout ke halaman daftar tema JANJIARA yang sesuai dengan paket.
- Jangan mengarahkan pelanggan ke landing page bawaan Satu Momen.
- Setelah pelanggan memilih tema, lanjutkan workflow existing.

## 2. URL Referensi

### Halaman daftar tema paket Purnama

`https://janjiaraundangan.webinvit.id/shop/paket-purnama-1792172563?theme=Fohoway`

URL ini merupakan contoh halaman daftar tema paket Purnama. Parameter `theme=Fohoway` adalah contoh tema, **bukan tema default permanen**.

### URL checkout otomatis

`https://janjiaraundangan.webinvit.id/portal/checkout/3488`

URL ini merupakan contoh endpoint checkout otomatis. Jika fitur checkout otomatis nonaktif, jangan tampilkan error atau mengarahkan pelanggan ke landing page bawaan Satu Momen. Arahkan pelanggan ke daftar tema untuk paket yang sesuai.

## 3. Product ID Paket

Gunakan pemetaan `productId` berikut untuk konfigurasi saat ini:

| Paket | Product ID |
|---|---:|
| Janji | `3486` |
| Cerita | `3487` |
| Purnama | `3488` |

### Status verifikasi (17 Oktober 2026)

Ketiga `productId` di atas sudah **diverifikasi langsung** dengan membuka
`/portal/checkout/<id>` dan membaca isi halamannya:

| `productId` | Nama Paket di checkout | Harga | Masa Aktif | Cocok dgn landing page |
|---:|---|---:|---|:--:|
| `3486` | Paket Janji | Rp109.000 | 30 Hari | ya |
| `3487` | Paket Cerita | Rp179.000 | 90 Hari | ya |
| `3488` | Paket Purnama | Rp299.000 | 180 Hari | ya |
| `3485` | — | — | — | 404, tidak ada |
| `3489` | — | — | — | 404, tidak ada |

Harga dan masa aktif persis sama dengan konstanta `PAKET` di landing page, jadi
pemetaan ini sudah pasti benar. Rentangnya juga tertutup: hanya tiga ID ini yang ada.

**Slug `/shop` BUKAN `productId` — sudah terbukti.** Halaman
`/shop/paket-purnama-1792172563` sama sekali tidak memuat angka `3488` di
dalamnya. Keduanya memakai penomoran yang berbeda dan tidak bisa saling diturunkan.

**Slug `/shop` untuk Janji dan Cerita belum diketahui.** Halaman `/shop` menampilkan
"Belum Ada Produk", dan menebak pola seperti `/shop/paket-janji` menghasilkan 404.
Slug kedua paket itu harus diambil manual dari dashboard Satu Momen sebelum
redirect daftar tema bisa diimplementasikan untuk semua paket.

### Perilaku saat ini (Checkout Otomatis NONAKTIF)

Fitur Checkout Otomatis sedang **dimatikan** di dashboard reseller Satu Momen.
Dua hal yang teramati dalam keadaan itu:

1. Tombol order pada halaman shop Satu Momen sudah otomatis berubah menjadi
   `/chat?text=Saya+mau+order+paket+*Paket+Purnama*+Tema+*Fohoway*` — jadi
   platform punya fallback chat sendiri, bukan checkout.
2. URL `/portal/checkout/3486`, `/3487`, `/3488` **tetap menampilkan halaman
   checkout yang berfungsi penuh** (form Log-In, Grand Total, tombol Process Order).

Artinya saklar di dashboard tidak mematikan endpoint checkout-nya. Jadi status
"aktif/nonaktif" tidak bisa dideteksi dengan cara mengecek apakah URL checkout
hidup atau mati — status itu harus dikelola manual (lihat `JJ_CHECKOUT` di
landing page).

### Catatan penting tentang Product ID

**`productId` berasal dari dashboard Satu Momen dan bergantung pada data paket yang tersedia di sana.**

Karena akun reseller tidak memiliki akses ke database Satu Momen, jika ada paket baru atau `productId` berubah/bertambah, pemetaan tersebut harus **ditambahkan atau diperbarui secara manual** berdasarkan informasi dari dashboard.

Ketentuan untuk AI Agent:
- Jangan menganggap daftar `productId` di atas bersifat otomatis atau dapat dibaca langsung dari database Satu Momen.
- Jangan mengarang `productId` untuk paket baru.
- Jangan mengasumsikan ID paket tidak akan pernah berubah.
- Simpan pemetaan di satu tempat konfigurasi yang mudah dipelihara, jika arsitektur project memungkinkan.
- Jika ada paket baru yang belum terpetakan, tangani dengan aman sesuai pola error/fallback existing; jangan mengarahkan pelanggan ke paket yang salah.
- Dokumentasikan bahwa penambahan paket atau perubahan ID memerlukan pembaruan manual.

**Penting:** URL contoh daftar tema Purnama yang diberikan menggunakan slug `paket-purnama-1792172563`. Pastikan format slug dan hubungan antara slug, `productId`, serta URL checkout diverifikasi dari konfigurasi/URL existing sebelum implementasi. Jangan mengasumsikan bahwa angka di URL checkout selalu sama dengan angka pada slug halaman tema.

## 4. Workflow yang Diharapkan

### A. Checkout Otomatis aktif

1. Pelanggan membuka URL checkout.
2. Sistem mendeteksi bahwa Checkout Otomatis aktif.
3. Sistem menjalankan workflow checkout existing tanpa perubahan perilaku yang tidak diperlukan.

### B. Checkout Otomatis nonaktif

1. Pelanggan membuka URL checkout.
2. Sistem mendeteksi bahwa Checkout Otomatis nonaktif.
3. Sistem menentukan paket terkait menggunakan konteks/request yang tersedia dan pemetaan paket yang valid.
4. Sistem mengalihkan pelanggan ke halaman daftar tema JANJIARA untuk paket tersebut.
5. Pelanggan memilih tema.
6. Sistem melanjutkan workflow pemesanan existing menggunakan tema pilihan pelanggan.

## 5. Aturan Redirect

Jika Checkout Otomatis nonaktif:

- Redirect ke halaman daftar tema JANJIARA sesuai paket.
- Jangan redirect ke landing page bawaan Satu Momen.
- Jangan menampilkan error checkout kepada pelanggan hanya karena fitur checkout otomatis nonaktif.
- Jangan mengarahkan semua pelanggan ke paket Purnama.
- Jangan menetapkan tema Fohoway sebagai pilihan permanen.
- Pertahankan parameter yang dibutuhkan workflow existing.
- Hindari redirect loop.
- Jangan menghilangkan konteks paket saat redirect.

Tujuan redirect harus ditentukan berdasarkan paket yang sedang diproses, bukan memakai satu URL tetap untuk semua paket.

## 6. Penyesuaian Tema

- Daftar tema harus sesuai dengan paket yang dipilih.
- Nama/identitas tema harus sesuai dengan tema yang dipilih pelanggan.
- `theme=Fohoway` hanya contoh parameter dari URL referensi.
- Jika pelanggan memilih tema lain, lanjutkan menggunakan tema tersebut.
- Setelah tema dipilih, pertahankan workflow existing.

## 7. Panduan Implementasi

Sebelum mengubah kode atau konfigurasi, periksa implementasi existing untuk mengetahui:

1. Di mana status Checkout Otomatis dikonfigurasi.
2. Bagaimana route checkout diproses.
3. Bagaimana URL daftar tema dibentuk.
4. Bagaimana paket dan tema diidentifikasi.
5. Parameter apa saja yang harus dipertahankan.
6. Bagaimana workflow dilanjutkan setelah pemilihan tema.

Pseudocode konseptual:

```text
handleCheckout(request):
    if isAutomaticCheckoutEnabled():
        continueExistingCheckoutWorkflow(request)
        return

    package = resolvePackageFromRequestAndManualMapping(request)

    if package is missing or unsupported:
        handleUsingExistingFallbackRules()
        return

    themeListUrl = resolveThemeListUrl(package)
    redirectTo(themeListUrl)
```

Pseudocode ini bukan implementasi final. Gunakan fungsi, pola routing, dan penanganan error yang sesuai dengan arsitektur existing.

### Prinsip perubahan

- Buat perubahan sekecil mungkin.
- Hindari duplikasi logika.
- Jangan membuat ulang workflow checkout jika workflow existing masih dapat digunakan.
- Jangan mengubah perilaku saat Checkout Otomatis aktif.
- Jangan mengasumsikan akses database Satu Momen tersedia.
- Pastikan pemetaan `productId` dapat diperbarui manual dengan mudah.

## 8. Acceptance Criteria

### Checkout Otomatis aktif
- [ ] Checkout berjalan seperti workflow existing.
- [ ] Tidak ada perubahan perilaku yang tidak diperlukan.

### Checkout Otomatis nonaktif
- [ ] URL checkout tidak menghasilkan error yang tidak perlu.
- [ ] Pelanggan diarahkan ke daftar tema JANJIARA.
- [ ] Pelanggan tidak diarahkan ke landing page bawaan Satu Momen.
- [ ] Halaman daftar tema sesuai dengan paket yang sedang diproses.

### Paket dan Product ID
- [ ] Janji menggunakan `productId` `3486`.
- [ ] Cerita menggunakan `productId` `3487`.
- [ ] Purnama menggunakan `productId` `3488`. (Angka `1792172563` adalah **slug halaman shop**, bukan `productId` — jangan dipakai sebagai `productId`.)
- [ ] Paket yang belum terpetakan ditangani dengan aman.
- [ ] Penambahan/perubahan `productId` dapat dilakukan secara manual tanpa mengubah banyak bagian kode.

### Pemilihan tema
- [ ] Daftar tema sesuai paket.
- [ ] Tema yang dipilih diteruskan dengan benar.
- [ ] `Fohoway` tidak dipaksakan sebagai tema default.
- [ ] Workflow existing berlanjut setelah pemilihan tema.

## 9. Regression Test

| No. | Skenario | Hasil yang diharapkan |
|---:|---|---|
| 1 | Checkout Otomatis aktif | Workflow checkout existing berjalan normal |
| 2 | Checkout Otomatis nonaktif — Janji (`3486`) | Redirect ke daftar tema Janji |
| 3 | Checkout Otomatis nonaktif — Cerita (`3487`) | Redirect ke daftar tema Cerita |
| 4 | Checkout Otomatis nonaktif — Purnama (`3488`) | Redirect ke daftar tema Purnama |
| 5 | Pelanggan memilih Fohoway | Tema Fohoway diteruskan dengan benar |
| 6 | Pelanggan memilih tema lain | Tema sesuai pilihan pelanggan |
| 7 | `productId` tidak dikenal (mis. `3485`, `3489` → 404) | Tidak salah redirect ke paket lain |
| 8 | Parameter tema tidak valid | Ditangani sesuai aturan existing |
| 9 | URL checkout dibuka berulang kali | Tidak terjadi redirect loop |
| 10 | Checkout Otomatis diaktifkan kembali | Workflow checkout existing pulih normal |

## 10. Instruksi Akhir untuk AI Agent

1. Telusuri implementasi existing sebelum melakukan perubahan.
2. Temukan titik redirect yang paling tepat.
3. Implementasikan redirect hanya saat Checkout Otomatis nonaktif.
4. Gunakan pemetaan manual `productId` yang tercantum di dokumen ini.
5. Verifikasi format URL daftar tema dan relasi ID dari konfigurasi/URL existing; jangan menebak.
6. Pertahankan workflow existing setelah tema dipilih.
7. Jalankan regression test untuk Janji, Cerita, dan Purnama.
8. Laporkan file yang diubah, ringkasan implementasi, hasil test, dan keterbatasan yang ditemukan.

**Prinsip utama:** Ubah perilaku redirect sesuai status Checkout Otomatis tanpa merusak workflow pemilihan tema dan pemesanan existing. Karena reseller tidak memiliki akses database Satu Momen, daftar `productId` dikelola secara manual berdasarkan dashboard Satu Momen.
