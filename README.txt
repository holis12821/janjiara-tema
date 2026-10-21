Logo metode pembayaran (opsional)
=================================
Halaman pembayaran menampilkan lencana nama (BCA, Bank Jago, DANA, GoPay, ShopeePay, QRIS).
Bila ingin memakai logo resmi, unduh dari media kit resmi masing-masing penyedia lalu simpan di folder ini
dengan nama berikut (format SVG, latar transparan atau putih), lalu di index.php cari "const JJ_BAYAR" dan tambahkan  logo: true  pada baris metode tersebut:

  bca.svg  jago.svg  dana.svg  gopay.svg  shopeepay.svg  qris.svg

Tanpa logo: true, halaman tetap menampilkan lencana nama.
