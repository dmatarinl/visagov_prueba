FROM php:8.2-apache

# Instalar extensiones de PHP y otras dependencias
RUN apt-get update && apt-get install -y libzip-dev zip unzip git && docker-php-ext-install pdo pdo_mysql zip

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Configurar el DocumentRoot de Apache para apuntar al directorio public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
