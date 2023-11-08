# Website Aplikasi Pembuatan Undangan Pernikahan 
Aplikasi ini kamu bisa membuat undangan digital yang akhir hasilnya akan menggenerate link berupa tema dan informasi yang ingin dibuat.

# Proses Instalasi
1. Install Web Server (XAMPP / Windows)
2. Install Composer https://getcomposer.org/Composer-Setup.exe (Windows)
3. Install Git https://git-scm.com/download/win (Windows)
4. Install Code Editor (Visual Studio Code)
5. Buka Code Editor (Visual Studio Code)
6. Buat Folder dan masuk ke directory folder tersebut
7. Download Repository https://github.com/1Firsts/undangan.git di Code Editor (Visual Studio Code)
Dengan mengetikan Command ```git clone https://github.com/1Firsts/undangan.git``` ke Directory Folder yang sudah dibuat.
8. Masuk ke Git Repository tadi, lakukan copy project file .env

    ```copy .env.example .env atau (linux command) cp .env.example .env```

9. Lakukan Update dengan menggunakan Command dibawah ini

    ```
    composer update
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve 
    ```

10. Jika sudah semua Project sudah bisa dilihat

Lihat Project Utama http://127.0.0.1:8000/
Lihat Project Admin http://127.0.0.1:8000/vcoba

# Langkah Membuat Seeder Database
Seeder yang saya buat ini untuk contoh data dummy login, sandi default adalah **password**
1. Masuk ke Directory tadi, ketikan command ini untuk membuat Seeder

    ```
    php artisan make:seeder DatabaseSeeder
    ```
    
3. Edit file **ProductsTableSeeder**, isi dengan Code dibawah ini
Jika code sudah ada, silahkan bisa abaikan saja

    ```
    <?php
    namespace Database\Seeders;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;
    use App\Models\User;

    class DatabaseSeeder extends Seeder
    {
        public function run(): void
        {
            // Menggunakan factory untuk membuat 10 user
            User::factory(10)->create();
            
            // Menambahkan satu user tambahan dengan email tertentu
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('test@example.com'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
    ```
    
4. Buka **DatabaseSeeder.php** ada di **database/seeders**
Ketikan Command dibawah ini dalam directory sebelumnya

    ```
    php artisan db:seed --class=DatabaseSeeder
    php artisan db:seed
    ```
    
5. Database Seeder sudah selesai dibuat
Anda bisa melakukan pengecekan data di **localhost/phpmyadmin**

# Landing Page
![image](https://github.com/1Firsts/undangan/assets/26076138/98a227c1-5d49-4f4a-a48f-ea810f34012e)

Default Root Address
http://127.0.0.1:8000 atau localhost/undangan

# Dashboard Admin
![image](https://github.com/1Firsts/undangan/assets/26076138/8b2326a3-3eb2-4d1c-ad67-fd1dd1a2df73)

# Screenshot
![Screenshot 2023-11-08 132405](https://github.com/1Firsts/undangan/assets/26076138/b3a3ebc2-aabb-448d-9285-98b6de78adf8)
![Screenshot 2023-11-08 132343](https://github.com/1Firsts/undangan/assets/26076138/772e697d-7456-40b2-a819-19abdbb8d4ef)
![Screenshot 2023-11-08 132334](https://github.com/1Firsts/undangan/assets/26076138/90db722e-8951-4ed8-b39d-0e028b4d710d)
![Screenshot 2023-11-08 132326](https://github.com/1Firsts/undangan/assets/26076138/1a5b7fd9-0cdd-4603-944c-55fb5e3526d1)
![Screenshot 2023-11-08 132314](https://github.com/1Firsts/undangan/assets/26076138/f35b53d0-33f8-4e23-b40c-e28b0c2717ed)
![Screenshot 2023-11-08 132305](https://github.com/1Firsts/undangan/assets/26076138/347caa5b-1615-4f3c-8d74-c1806b517e48)
![Screenshot 2023-11-08 132300](https://github.com/1Firsts/undangan/assets/26076138/d6c748b6-2f08-47d6-95f0-ae10e572e2af)

# Custom Address
http://127.0.0.1:8000/vcoba

# Feature
- Dashboard Interaktif
- Data Order
- Tabel Rangkuman
- Daftar Tema
- Buat Orderan Tema
- Lihat Orderan Tema

# Build Spesificiation
- Build with Laravel 10
- PHP 8.2.4
- Composer Version 2.6.2
- XAMPP 8.2.4
