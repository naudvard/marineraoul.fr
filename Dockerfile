FROM arm64v8/alpine:3.17

RUN apk update && \
	apk add --no-cache nginx \
	php81 \
	php81-pdo \
	php81-pdo_mysql \
	php81-fpm \
	php81-opcache \
	nginx

RUN mkdir -p /run/php
COPY ./core/config/php-fpm.conf /etc/php81/php-fpm.conf

RUN mkdir -p /run/nginx
COPY default.conf /etc/nginx/http.d/default.config

COPY ./src /var/www/html

EXPOSE 9000

CMD ["php-fpm8.1", "-F"]