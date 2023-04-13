# Deployment Steps

## Pull dari Repository

1. Jalankan composer install
   ```bash
   composer install
   ```
2. Jalankan composer update
   ```bash
   composer update
   ```
3. Ubah file `.sample` menjadi `.env`

## Upload ke Web Hosting

1. Upload folder project ke root hosting
2. Pindahkan isi didalam folder `pelayanan-online/public` ke dalam folder `public_html` hosting
3. Ubah path didalam `public_html/index.php` menjadi path yang mengarah ke folder Codeigniter

   ```php
   // require FCPATH . '../app/Config/Paths.php';
   require FCPATH . '../pelayanan-online/app/Config/Paths.php';
   ```

4. Mengubah environment pada file `.env` menjadi production
   ```env
   # CI_ENVIRONMENT = development
   CI_ENVIRONMENT = production
   ```
5. Ubah base url pada `.env` menjadi url website yang akan digunakan
   ```env
   app.baseURL = 'http://localhost:8080/'
   ```
6. Ubah base url pada `pelayanan-online/app/config/App.php` menjadi url website yang akan digunakan
   ```php
   public string $baseURL = 'http://localhost:8080/';
   ```
7. Buat Database pada web server
8. Setelah membuat database pada web server, ubah konfigurasi database pada file `.env` sesuai dengan informasi database yang telah dibuat
   ```env
   database.default.hostname = localhost
   database.default.database = nama_database
   database.default.username = username_database
   database.default.password = password_database
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
   database.default.port = 3306
   ```
9. Masukan random token JWT pada file `.env`
   ```env
   TOKEN_SECRET = random_token
   ```
10. Masukan Recaptcha Secret Key pada file `.env` dari admin console Recaptcha v3 Google
    ```env
    RECAPTCHA_SECRET = secret_key
    ```
