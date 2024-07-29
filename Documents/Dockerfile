FROM php:7.4-apache

WORKDIR /var/www/html
COPY ./app .
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80