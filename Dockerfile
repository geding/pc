#Dockerfile
FROM php:7.4-apache
RUN apt-get update
RUN apt-get install -y apache2
COPY . /var/www/php
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]