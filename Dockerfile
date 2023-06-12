# Dockerfile
FROM php:8.2-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80
WORKDIR /web-api

RUN apt-get update -qq && \
    apt-get install -qy && \
    apt-get install nano -y && \
    apt-get install net-tools -y && \
    apt-get install iputils-ping -y && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install pdo_mysql pdo
RUN docker-php-ext-enable pdo_mysql pdo

# PHP Extensions
COPY docker/web-conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Apache
COPY docker/web-conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/web-conf/apache.conf /etc/apache2/conf-available/web-api.conf

# Dossiers
COPY public /web-api/public

RUN a2enmod rewrite remoteip && \
    a2enconf web-api