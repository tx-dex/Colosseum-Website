MAKEFILE_DIR:=$(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))
LOCAL_DB:=drupal9_local

shell:
	docker-compose exec --workdir=/var/www/web drupal bash

pull:
	docker-compose pull drupal

up:
	docker-compose up -d

stop:
	docker-compose stop

update-drupal-image: pull up

backup-mysql:
	echo "Backing up DB"
	docker-compose exec -T mysql mysqldump --opt --single-transaction $(LOCAL_DB)|gzip > $(LOCAL_DB).$$(date +%Y%m%d-%H%M).sql.gz

cache-rebuild:
	docker-compose exec --workdir=/var/www/web -T drupal drush cache-rebuild

updatedb:
	docker-compose exec --workdir=/var/www/web -T drupal drush updatedb -y

drop-sql: backup-mysql
	echo "Drop DB"
	docker-compose exec --workdir=/var/www/web -T drupal drush sql-drop -y

copy-mysql-dev-to-local: drop-sql
	ssh clients.sangre.dev "cd colosseum-website/ && docker-compose exec -T mysql mysqldump --opt --single-transaction drupal9"|docker-compose exec -T mysql mysql drupal9_local
	$(MAKE) updatedb

copy-files-dev-to-local:
	sudo rsync --rsync-path="sudo rsync" -avz devops@clients.sangre.dev:/var/lib/docker/volumes/colosseum-website_files/_data/ /var/lib/docker/volumes/colosseum-website-files/_data/

copy-mysql-prod-to-local: drop-sql
	ssh devops@academy.colosseumdental.com "sudo -i PWD=/root/ mysqldump --opt --single-transaction d8_aca_prod"|docker-compose exec -T mysql mysql drupal9_local
	$(MAKE) updatedb

copy-files-prod-to-local:
	sudo rsync --rsync-path="sudo rsync" -avz devops@academy.colosseumdental.com:/var/lib/docker/volumes/site-files/_data/ /var/lib/docker/volumes/academy_site-files/_data/
sync-dev: update-drupal-image copy-files-dev-to-local copy-mysql-dev-to-local cache-rebuild
sync-prod: update-drupal-image copy-files-prod-to-local copy-mysql-prod-to-local cache-rebuild
