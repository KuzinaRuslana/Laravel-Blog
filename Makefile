start:
	php artisan serve

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app 