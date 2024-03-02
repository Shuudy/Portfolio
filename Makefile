
installdev:
	composer install
	npm install
	copy .env.example .env
	php artisan key:generate
	mkdir storage/app/public/uploads
	php artisan storage:link

deploy:
	ssh anje7957@109.234.166.140 'cd ~/sites/jancieux.fr && git pull origin main && make install'

install: vendor/autoload.php .env public/storage public/build/manifest.json
	php artisan cache:clear
	php artisan migrate

.env:
	copy .env.example .env
	php artisan key:generate

public/storage:
	mkdir storage/app/public/uploads
	php artisan storage:link

vendor/autoload.php: composer.lock
	composer install
	touch vendor/autoload.php

public/build/manifest.json: package.json
	npm i
	npm run build