.PHONY:	dev
dev:
	php artisan serve

.PHONY:	cc
cc:
	php artisan cache:clear

.PHONY:	migration
migration:
	php artisan migrate:refresh && php artisan db:seed

.PHONY: test
test:
	php artisan test