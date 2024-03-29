# Set master image
FROM php:8.2.1-fpm

# Set local timezone
ARG TIMEZONE
ENV TZ=$TIMEZONE
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Set www root
ARG WEBROOT
ENV WWWROOT=$WEBROOT

# Set working directory
WORKDIR $WWWROOT

# Add PHP-PDO Extenstions
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql

# Build PHP-REDIS Extenstions
#RUN pecl install -o -f redis \
#    &&  rm -rf /tmp/pear \
#    &&  echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

# Add ffmpeg package
#RUN apt-get install -y ffmpeg libavcodec-extra

# Add supervisor package
#RUN apt-get install -y supervisor

# Enable PHP-PDO Extenstions
RUN docker-php-ext-enable pdo_pgsql

# Clear cache
RUN apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./php.ini /usr/local/etc/php/php.ini
ADD ./php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
# Copy existing application directory permissions
COPY --chown=www-data:www-data . $WWWROOT

#start container
COPY start-container.sh /usr/local/bin
RUN chmod +x /usr/local/bin/start-container.sh

# Expose port 9000 and start php-fpm server and supervisor
EXPOSE 9000
ENTRYPOINT ["start-container.sh"]
