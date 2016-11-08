FROM php:5.6-apache
RUN apt-get update && apt-get install -y php5-pgsql && php5enmod pgsql
COPY *.php /var/www/html/
