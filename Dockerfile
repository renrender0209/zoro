FROM php:8.2-apache

RUN a2enmod rewrite
RUN docker-php-ext-install mysqli

# .htaccess を有効化（AllowOverride All）
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# RenderはPORT環境変数でポートが変わるので、それに追従する起動スクリプトを使う
COPY ./docker/start.sh /start.sh
RUN chmod +x /start.sh

# アプリ配置
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

CMD ["/start.sh"]
