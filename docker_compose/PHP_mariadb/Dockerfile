FROM php:7.4-apache

#install mysqli extension for php
RUN docker-php-ext-install mysqli

#copy the application code to the container 
COPY src/ /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
