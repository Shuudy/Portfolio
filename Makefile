
install:
	composer install
	npm install
	npm install sass
	copy .env.example .env
	php artisan key:generate