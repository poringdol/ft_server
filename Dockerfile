FROM debian:buster

MAINTAINER pdemocri <pdemocri@student.21-school.ru>

EXPOSE 80
EXPOSE 443  

RUN apt-get update \
&& apt-get install -y dialog apt-utils \
&& echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections \
&& apt-get install -y -q

# firewall
#RUN apt-get install -y ufw
#RUN ufw allow 80/tcp
#RUN ufw allow 443/tcp
#RUN ufw reload

# install utils
RUN apt-get install -y nginx
RUN apt-get install -y wget
RUN apt-get install -y mariadb-server
RUN apt-get install -y curl
RUN apt-get install -y vim

# install php
RUN apt-get install -y php php-fpm php-mysql php-curl

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz \
&& tar -xvf phpMyAdmin-4.9.5-all-languages.tar.gz \
&& mv phpMyAdmin-4.9.5-all-languages /usr/share/phpmyadmin \
&& rm -r phpMyAdmin-4.9.5-all-languages.tar.gz \
&& ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
COPY srcs/phpmyadmin/ usr/share/phpmyadmin

# copy database
COPY srcs/localhost.sql /var/lib/mysql/

# nginx config
COPY srcs/nginx/default etc/nginx/sites-available/default

# copy wordpress
COPY srcs/html/ var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www/

# copy certificates for ssl
COPY srcs/nginx/localhost.crt /etc/ssl/certs/
COPY srcs/nginx/localhost.key /etc/ssl/certs/

COPY srcs/autoindex.sh /
RUN chmod 777 autoindex.sh
COPY srcs/run.sh /
RUN chmod 777 run.sh
ENTRYPOINT ["./run.sh"]