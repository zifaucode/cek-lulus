<p align="center"><a href="https://github.com/zifaucode/cek-lulus" target="_blank"><img src="https://user-images.githubusercontent.com/33486013/164989084-586c08af-43ea-4f59-93dd-54f25f22c830.png" width="900" alt="Screenshot Aplikasi"></a></p>

<p align="center">
  <a href="https://github.com/zifaucode/cek-lulus/stargazers"><img src="https://img.shields.io/github/stars/zifaucode/cek-lulus.svg?style=social&label=Star" alt="GitHub stars"></a>
  <a href="https://github.com/zifaucode/cek-lulus/network/members"><img src="https://img.shields.io/github/forks/zifaucode/cek-lulus.svg?style=social&label=Fork" alt="GitHub forks"></a>
  <a href="https://github.com/zifaucode/cek-lulus/releases"><img src="https://img.shields.io/github/release/zifaucode/cek-lulus.svg" alt="GitHub release"></a>
  <a href="https://github.com/zifaucode/cek-lulus/blob/master/LICENSE"><img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License: MIT"></a>
  <a href="https://github.com/zifaucode/cek-lulus/actions/workflows/ci.yml"><img src="https://github.com/zifaucode/cek-lulus/actions/workflows/ci.yml/badge.svg" alt="CI"></a>
  <a href="https://trakteer.id/zifau"><img src="https://img.shields.io/static/v1?label=Trakteer&message=zifaucode&color=C02433" alt="Trakteer"></a>
</p>

<b>Fork dan Star ⭐ jika ini membantu ♥️</b>

# Index

- **[Tentang CEK-LULUS](#tentang-cek-lulus)**
- **[Demo Website](#demo-website)**
- **[CARA INSTALL](#cara-install)**
- **[USER PASSWORD](#user-password)**
- **[Roadmap](#roadmap)**
- **[Contributing & Good First Issue](#contributing--good-first-issue)**
- **[NOTED](#noted)**
- **[TRAKTIR KOPI](#traktir-kopi)**

<br>
<br>

## Tentang CEK-LULUS

Merupakan web untuk mengetahui kelulusan Siswa/i (SD/SMP/SMA) dengan cara memasukan NISN atau NO.UJIAN. Website ini dibuat dengan laravel 10, vuejs 2 cdn, Axios cdn, dengan template STACK ADMIN 3 (Dashboard admin). CEK-LULUS memiliki fitur sebagai berikut:

- Terdapat Fitur upload siswa Excel dengan format template yang sudah disediakan tanpa ribet harus input 1 per 1 siswa
- Terdapat juga Fitur Edit web seperti setting logo, nama web, title web, deskripsi web, dan footer
- Terdapat juga Fitur Cetak dan setting surat keterangan lulus (skl)

<br>
<br>

## Demo Website

Anda dapat melihat demo website aplikasi ini melalui tautan berikut:
🔗 **[Live Demo CEK-LULUS](#)** *(Demo belum tersedia, akan segera ditambahkan)*

<br>
<br>

## CARA INSTALL

Untuk Menginstall Secara Lokal Pastikan PHP anda diatas > 7.3

- Clone Repository ini Diterminal kesayangan anda `git clone https://github.com/zifaucode/cek-lulus.git`
- Ketikan `composer install`
- Rename .env-lokal menjadi .env dan edit sesuai konfigurasi database anda
- Buat database pada dbms anda (ex: phpmyadmin) dengan nama sesuai konfigurasi DB_DATABASE pada .env
- Migrate databasenya : `php artisan migrate`
- Jalankan Seeder database : `php artisan db:seed`

Jalankan Diterminal

- `php artisan optimize:clear` dan `php artisan serve`

<br>
<br>

opsi selain jika tidak ingin menjalankan migrate database dan seeder:

- File SQL terletak pada foldel DBNYA-INI , import ke dalam db mysql yang sudah anda buat pada dbms anda

## USER PASSWORD

- U: admin
- P: 12345678

<br>
<br>

## UPDATE

- Seeder User, Web, Setting
- Tampilan Frontend
- Bug Fix Cek no ujian

<br>
<br>

## Roadmap

- [x] Fitur upload excel data siswa
- [x] Setting website dinamis (Logo, Nama, dll)
- [x] Cetak Surat Keterangan Lulus (SKL)
- [ ] Integrasi dengan WhatsApp Gateway untuk notifikasi kelulusan
- [ ] Template SKL yang lebih beragam dan bisa dikustomisasi
- [ ] API terpisah untuk keperluan Mobile App

<br>
<br>

## Contributing & Good First Issue

Kami sangat menyambut kontribusi dari komunitas! Jika Anda tertarik untuk membantu mengembangkan CEK-LULUS, silakan baca [CONTRIBUTING.md](CONTRIBUTING.md) dan [Code of Conduct](CODE_OF_CONDUCT.md).

**Ingin mulai berkontribusi?**
Silakan cek issues dengan label [`good first issue`](https://github.com/zifaucode/cek-lulus/issues?q=is%3Aissue+is%3Aopen+label%3A%22good+first+issue%22) atau [`help wanted`](https://github.com/zifaucode/cek-lulus/issues?q=is%3Aissue+is%3Aopen+label%3A%22help+wanted%22). Ini adalah tugas-tugas yang sangat cocok untuk kontributor baru!

<br>
<br>

## TRAKTIR KOPI

Traktir kopi agar melek terus saat ngoding : <a href="https://trakteer.id/zifau"><img src="https://img.shields.io/static/v1?label=Trakteer&message=zifaucode&color=C02433"></a>

<br>
<br>

## License

The CEK-LULUS project is open-sourced software licensed under the [MIT license](LICENSE) (see LICENSE file for more details).
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
