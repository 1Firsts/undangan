# Website Aplikasi Pembuatan Undangan Pernikahan 
Aplikasi ini kamu bisa membuat undangan digital yang akhir hasilnya akan menggenerate link berupa tema dan informasi yang ingin dibuat.

# Installations

copy .env.example .env or (linux command) cp .env.example .env

    composer update
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve 
    
(See Project) http://127.0.0.1:8000/

# Make Seeder Database
Seeder yang saya buat ini untuk contoh data dummy login

    php artisan make:seeder DatabaseSeeder

Edit file ProductsTableSeeder
    
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
    
DatabaseSeeder.php in the database/seeders directory.
    
    php artisan db:seed --class=DatabaseSeeder
    php artisan db:seed
    
Let's See!

# Landing Page
![image](https://github.com/1Firsts/undangan/assets/26076138/98a227c1-5d49-4f4a-a48f-ea810f34012e)

Default Root Address
http://127.0.0.1:8000 or localhost/undangan

# Dashboard Admin
![image](https://github.com/1Firsts/undangan/assets/26076138/8b2326a3-3eb2-4d1c-ad67-fd1dd1a2df73)

# Custom Address
http://127.0.0.1:8000/vcoba

# Feature
- Dashboard Interaktif
- Data Order
- Tabel Rangkuman
- Daftar Tema
- Buat Orderan Tema
- Lihat Orderan Tema

Selama masih pengembangan beberapa feature tidak bekerja, Feature akan ditambahkan seiring berjalannya waktu.

# Build Spesificiation
- Build with Laravel 10
- PHP 8.2.4
- Composer Version 2.6.2
- Xampp 8.2.4
