#!/usr/bin/env bash

cd /code
composer install

if [[ "$1" == "init" ]]; then
    exec docker-php-entrypoint php-fpm
else
    exec docker-php-entrypoint "$@"
fi