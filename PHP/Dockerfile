FROM php:7.4-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
USER root
RUN service apache2 restart
RUN chown  -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html
COPY index.php /var/www/html
COPY count.php /var/www/html
