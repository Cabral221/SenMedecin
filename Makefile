.PHONY:	serve
serve:
	php artisan serve

.PHONY:	cc
cc:
	php artisan cache:clear

.PHONY:	mig
mig:
	php artisan migrate

.PHONY:	mig-ref
mig-ref:
	php artisan migrate:refresh && php artisan db:seed