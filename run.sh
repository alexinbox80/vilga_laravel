#!/bin/bash

case $1 in
build)
    echo "App build"
    docker-compose build
    ;;
up)
    echo "App run"
    docker-compose up -d
    docker-compose exec app php artisan migrate --seed
    docker-compose exec app php artisan storage:link
    docker-compose exec app php artisan optimize:clear
    ;;
stop)
    echo "App stop"
    docker-compose stop
    ;;
rm)
    echo "App remove"
    docker-compose rm app
    ;;
ps)
    echo "Docker list"
    docker-compose ps
    ;;
init)
    echo "App init"
    docker-compose exec app php artisan optimize:clear
    docker-compose exec app php artisan migrate --seed
    docker-compose exec app php artisan storage:link
    echo '' > storage/logs/laravel.log
    ;;
bash)
    echo "Run bash interpreter"
    docker-compose exec -u root -it app bash
    ;;
*)
    echo -e "\033[0m\033[31mWrong command argument \033[0m"
    ;;
esac
