<p align="center"><a href="https://github.com/zifaucode/cek-lulus" target="_blank"><img src="https://user-images.githubusercontent.com/33486013/164989084-586c08af-43ea-4f59-93dd-54f25f22c830.png" width="900"></a></p>

<p align="center">
<a href="https://trakteer.id/zifau"><img src="https://img.shields.io/static/v1?label=Trakteer&message=zifaucode&color=C02433"></a>
</p>

<b>Fork dan Star ⭐ jika ini membantu ♥️</b>


# Index
- **[Tentang CEK-LULUS](#tentang-cek-lulus)**
- **[CARA INSTALL](#cara-install)**
- **[USER PASSWORD](#user-password)**
- **[NOTED](#noted)**
- **[TRAKTIR KOPI](#traktir-kopi)**

<br>
<br>
<br>

## Tentang CEK-LULUS

Merupakan web untuk mengetahui kelulusan Siswa/i (SD/SMP/SMA) dengan cara memasukan NISN atau NO.UJIAN. Website ini dibuat dengan laravel 8, vuejs 2 cdn, Axios cdn, dengan template STACK ADMIN 3 (Dashboard admin). CEK-LULUS memiliki fitur sebagai berikut:

-   Terdapat Fitur upload siswa Excel dengan format template yang sudah disediakan tanpa ribet harus input 1 per 1 siswa
-   Terdapat juga Fitur Edit web seperti setting slide gambar , logo, nama web, title web
-   Terdapat juga Fitur Cetak dan setting surat keterangan lulus (skl)

<br>
<br>
<br>

## CARA INSTALL

Untuk Menginstall Secara Lokal Pastikan PHP anda diatas > 7.3

-   Clone Repository ini Diterminal kesayangan anda `git clone https://github.com/zifaucode/cek-lulus.git`
-   Ketikan `composer install`
-   Rename .env-lokal menjadi .env dan edit sesuai konfigurasi database anda
-   migrate databasenya : `php artisan migrate`

opsi selain migrate database :

-   File SQL terletak pada foldel DBNYA-INI , import ke dalam mysql anda

Dan Jalankan

-   `php artisan optimize:clear` dan `php artisan serve`

<br>
<br>
<br>

## USER PASSWORD

-    U: admin
-    P: 123456789

<br>
<br>
<br>

## NOTED

-   Seeder belum ada

<br>
<br>
<br>

## TRAKTIR KOPI

Traktir kopi agar melek terus saat ngoding : <a href="https://trakteer.id/zifau"><img src="https://img.shields.io/static/v1?label=Trakteer&message=zifaucode&color=C02433"></a>

<br>
<br>
<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
