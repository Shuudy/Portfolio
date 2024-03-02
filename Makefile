
install:
	composer install
	npm i
	npm i sass
	copy .env.example .env
	php artisan key:generate
	mkdir storage/app/public/uploads
	php artisan storage:link