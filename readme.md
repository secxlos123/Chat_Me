1. Git Clone https://github.com/secxlos123/Chat_Me.git

2. composer install

3. mv .env.example .env

4. Buat Database psql 
	dbname = ChatAplikasi
	user   = postgres
	password=root
	Kalau ingin mengubah setting database, harus pula mengubah .env
	DB_CONNECTION=xxxxxxx
	DB_HOST=127.0.0.1
	DB_PORT=xxxxx
	DB_DATABASE=xxxxxxx
	DB_USERNAME=xxxxx
	DB_PASSWORD=xxxxxx
	
5. php artisan key:generate

6. php artisan migrate --seed

7. php artisan passport:install

8. Jika Menggunakan node,
	a. npm install
	b. npm run development atau cek di package.json

9. Jalankan server local, php artisan serve --port={bebas/numberic}