bash: 
git clone https://github.com/luisgloriaa/lavanderia
cd lavanderia
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
npm run dev

Acceso:
http://127.0.0.1:8000

