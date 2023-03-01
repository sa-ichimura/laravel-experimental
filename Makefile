# docker
.PHONY:api.up
api.up:
	docker compose up -d

.PHONY:api.bash
api.bash:
	docker compose exec app bash

.PHONY:tools.up
tools.up:
	docker compose --profile tools up -d
PHONY:up
	api.up api.tools

.PHONY:build
build:
	docker compose build --no-cache &&\
	docker compose --profile tools build --no-cache
.PHONY:stop
stop:
	docker compose --profile tools stop &&\
	docker compose --profile docs stop &&\
	docker compose stop
.PHONY:init
init:
	docker compose exec app bash -c "chmod -R 777 storage bootstrap/cache" && \
	docker compose exec app bash -c "composer install" && \
	docker compose exec app bash -c "cp .env.example .env" && \
	docker compose exec app bash -c "php artisan key:generate" && \
	docker compose exec app bash -c "php artisan storage:link" && \
	docker compose exec app bash -c "php artisan migrate"

# document
openapi-generator: 
	 docker compose --profile docs up openapi-generator

# api
