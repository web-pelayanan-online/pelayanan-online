# Deployment Steps

## Pull dari Repository

- Jalankan composer install
- Jalankan composer update
- Ubah file env-sample menjadi .env

## Upload ke Web Hosting

- Upload folder project ke root hosting
- Pindahkan isi didalam folder *pelayanan-online/public* ke dalam folder *public_html* hosting
- Ubah path didalam _public_html/index.php_ menjadi path yang mengarah ke folder Codeigniter

  - require FCPATH . *'../(nama_folder)/app/Config/Paths.php'*;
  - require FCPATH . *'../pelayanan-online/app/Config/Paths.php'*;

- Mengubah environment pada file `.env` menjadi production
  - CI_ENVIRONMENT = production
- Ubah base url pada `.env` menjadi url website yang akan digunakan
  - app.baseURL = 'http://localhost:8080/'
- Ubah base url pada *pelayanan-online/app/config/App.php* menjadi url website yang akan digunakan

  - public string $baseURL = 'http://localhost:8080/';

- Setelah membuat database pada web server, ubah konfigurasi database pada file .env sesuai dengan informasi database yang telah dibuat
  - database.default.hostname = localhost
  - database.default.database = nama_database
  - database.default.username = username database
  - database.default.password = password database
  - database.default.DBDriver = MySQLi
  - database.default.DBPrefix =
  - database.default.port = 3306
