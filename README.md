Cara Install Dan Menjalankan

git clone https://github.com/faqiharifinputra/Laravel_crud.git

cd laravel-crud-12

composer install

cp .env.example .env # (di Windows: copy .env.example .env)

php artisan key:generate

ubah file .env

php artisan migrate

php artisan storage:link

php artisan serve # (jalankan server lokal)
