FROM	alpine:3.14

RUN	apk update
RUN	apk upgrade
RUN	apk add php7 \
    php7-amqp \
    php7-dev \
    php7-common \
    php7-apcu \
    php7-bcmath \
    php7-xmlwriter \
    php7-ctype \
    php7-curl \
    php7-exif \
    php7-iconv \
    php7-intl \
    php7-json \
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pcntl \
    php7-pdo \
    php7-mysqlnd \
    php7-pdo_mysql \
    php7-pdo_pgsql \
    php7-pdo_sqlite \
    php7-gd \
    php7-phar \
    php7-posix \
    php7-session \
    php7-xml \
    php7-simplexml \
    php7-mcrypt \
    php7-xsl \
    php7-zip \
    php7-zlib \
    php7-dom \
    php7-redis \
    php7-fpm \
    php7-tokenizer \
    php7-mysqli

RUN	apk add curl wget
RUN	apk add openrc

RUN	rm -f /etc/php7/php-fpm.d/www.conf
COPY	conf/default.conf /etc/php7/php-fpm.d/www.conf

RUN	mkdir -p /var/www/html
RUN	adduser -u 82 -D -S -G www-data www-data
RUN	chmod 777 -R /var/www/html
RUN	chown -R www-data:www-data /var/www/html

COPY	./conf/wp-config.php ./
COPY	./conf/script.sh ./
RUN	chmod +x ./script.sh
ENTRYPOINT ["./script.sh"]	

EXPOSE	9000
