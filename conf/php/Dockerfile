FROM php:8.2-fpm

MAINTAINER Khasanov Aynur <xacahob@bk.ru>

COPY init.sh /init.sh

WORKDIR '/code'

RUN apt-get update && apt-get install -y  \
    libpq-dev \
    curl \
    git \
    unzip \
    sendmail \
    && docker-php-ext-install pdo pdo_pgsql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod 755 /init.sh

RUN sed -i '/#!\/bin\/sh/aecho "$(hostname -i)\t$(hostname) $(hostname).localhost" >> /etc/hosts' /usr/local/bin/docker-php-entrypoint


ENV COMPOSER_ALLOW_SUPERUSER=1

ENTRYPOINT ["/init.sh"]

CMD ["init"]