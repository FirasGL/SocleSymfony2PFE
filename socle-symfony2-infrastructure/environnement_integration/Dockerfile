FROM php:7.0-apache

# Add files to Apache directory
VOLUME ["/var/www/html/socle_symfony2_PFE"]

# install mysql driver
RUN docker-php-ext-install pdo pdo_mysql
# install php-gd extension
RUN apt-get update && apt-get install -y \
	libjpeg-dev\
	libpng-dev\
	libfreetype6-dev\
	zlib1g-dev\
    libicu-dev\
    g++

RUN rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && docker-php-ext-install gd zip