.PHONY:	dev
dev:
	php artisan serve

.PHONY:	cc
cc:
	php artisan cache:clear

.PHONY:	migration
migration:
	php artisan migrate:fresh --seed

.PHONY: test
test:
	php artisan test

.PHONY: stan
stan:
	./vendor/bin/phpstan analyse --memory-limit=2G --xdebug