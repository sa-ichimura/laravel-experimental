# api command

.PHONY:api.up
api.up:
	docker compose up -d

.PHONY:api.bash
api.bash:
	docker compose exec app bash

.PHONY:api.build
api.build:
	docker compose build --no-cache

.PHONY:api.fmt
api.fmt:
	docker compose exec app ./vendor/bin/php-cs-fixer fix

.PHONY:api.stop
api.stop:
	docker compose stop

.PHONY:api.init
api.init:
	docker compose exec app bash -c "chmod -R 777 storage bootstrap/cache" && \
	docker compose exec app bash -c "composer install" && \
	docker compose exec app bash -c "cp .env.example .env" && \
	docker compose exec app bash -c "php artisan key:generate" && \
	docker compose exec app bash -c "php artisan storage:link" && \
	docker compose exec app bash -c "php artisan migrate"

# document
openapi-generator: 
	 docker compose --profile docs up openapi-generator

