Logo metode pembayaran
======================
Berkas di folder ini dipakai sebagai logo pada pilihan pembayaran di Form Order.

Yang sudah terpasang:

  bca.webp         BCA
  jago.webp        Bank Jago
  dana.webp        DANA
  gopay.svg        GoPay
  shopeepay.webp   ShopeePay

QRIS sengaja tanpa berkas logo: yang ditampilkan adalah gambar QR-nya sendiri,
yaitu assets/qris-shopeepay.png (satu tingkat di atas folder ini).

MENAMBAH ATAU MENGGANTI LOGO
----------------------------
1. Unduh logo dari media kit resmi penyedia (latar transparan atau putih).
2. Rapikan dulu: potong bingkai kosong di sekelilingnya dan perkecil sampai
   tingginya sekitar 160 px. Di halaman logonya hanya dirender setinggi 40 px,
   jadi berkas besar hanya memperlambat tanpa menambah ketajaman.
3. Simpan di folder ini, lalu di index.php cari "const JJ_BAYAR" dan tulis nama
   berkasnya LENGKAP DENGAN EKSTENSI pada baris metode tersebut, misalnya:

     logo: "bca.webp"      logo: "gopay.svg"

   Ekstensi sengaja tidak ditebak oleh kode: tiap penyedia membagikan format
   yang berbeda (ada yang SVG, ada yang hanya PNG/WebP).
4. Jalankan  bash tools/sinkron-index-html.sh  supaya index.html ikut berubah.

Tanpa baris  logo:  — atau bila berkasnya gagal dimuat — halaman tetap aman:
yang tampil lencana nama berwarna (BCA, DANA, ...), bukan ikon gambar rusak.

PENTING: berkas logo harus ikut di-commit ke git. Folder ini disalin ke hosting
oleh .cpanel.yml; berkas yang masih untracked tidak akan pernah sampai ke server
dan logonya akan 404 di janjiara.com.
