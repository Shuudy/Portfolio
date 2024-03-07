
install:
	composer install
	npm i
	copy .env.example .env
	php artisan key:generate
	mkdir -p storage/app/public/uploads
	mkdir -p storage/app/public/cv
	php artisan storage:link