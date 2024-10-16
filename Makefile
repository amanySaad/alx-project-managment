workspace:
	cd ../laradock && docker-compose exec --user=laradock workspace bash

workspace-restart:
	cd ../laradock && docker-compose restart

workspace-stop:
	cd ../laradock && docker-compose stop

workspace-setup:
	cd ../laradock && docker-compose up -d nginx mysql phpmyadmin mailhog redis redis-webui
