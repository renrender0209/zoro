FROM php:8.2-apache

# mod_rewrite 有効化
RUN a2enmod rewrite

# mysqli 拡張（MySQL接続に必要）
RUN docker-php-ext-install mysqli

# .htaccess を有効にする（AllowOverride）
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# もしDocumentRootが直下で良いならこれでOK
# public/ フォルダがある構成なら、ここを /var/www/html/public に変える
COPY . /var/www/html/

EXPOSE 80
