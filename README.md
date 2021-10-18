# campuspedia-tugas
Oleh: M. Abyan Rizqo<br><br>
Ini merupakan repositori bagian dari tugas untuk magang di Campuspedia untuk pilihan Web Developer. Project ini berisi aplikasi CRUD sederhana untuk membuat cover letter / surat lamaran pekerjaan.

## Cara menjalankan server
Pastikan anda sudah melakukan setup database dan database yang ada di folder migrasi sudah dimigrasikan ke database.<br>
Migrasi dapat dilakukan dengan menjalankan beberepa perintah berikut pada terminal

    php artisan migrate:rollback
    php artisan migrate
Jika sudah, server dapat dijalankan dengan perintah berikut pada terminal
    
    php artisan serve
kemudian buka http://localhost:PORT pada browser. Ganti PORT dengan port yang anda gunakan.
