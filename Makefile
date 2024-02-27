
install:
	composer install
	npm install
	npm install sass
	copy .env.example .env
	php artisan key:generate
	mkdir storage/app/public/uploads
	php artisan storage:link