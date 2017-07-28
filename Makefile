npm_install:
	docker-compose run --rm dolphin_node sh -c "cd /dolphin && npm install"

npm_run_dev:
	docker-compose run --rm dolphin_node sh -c "cd /dolphin && npm run dev"

npm_run_watch:
	docker-compose run --rm dolphin_node sh -c "cd /dolphin && npm run watch"

migrate_install:
	docker-compose run --rm dolphin_php sh -c "cd /dolphin && php artisan migrate:install"

migrate:
	docker-compose run --rm dolphin_php sh -c "cd /dolphin && php artisan migrate"

composer_install:
	docker-compose run --rm dolphin_php sh -c "cd /dolphin && composer install --prefer-dist"
