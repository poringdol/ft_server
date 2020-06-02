#!/bin/bash

# start services
service nginx start
service php7.3-fpm start
service mysql start

# create new database
mariadb -e "CREATE DATABASE db_wordpress;"
mariadb -e "CREATE USER 'pdemocri'@'localhost' IDENTIFIED BY 'pdemocri';"
mariadb -e "GRANT ALL PRIVILEGES ON db_wordpress.* TO 'pdemocri'@'localhost';"

# import database with site
mysql --user='pdemocri' --password='pdemocri' db_wordpress < '/var/lib/mysql/localhost.sql'

if [ ! -f .initialized ]; then                                                                                                                                                                                    
    echo "Initializing container"                                                                                                                                                                                 
    # run initializing commands                                                                                                                                                                                   
    touch .initialized                                                                                                                                                                                            
fi                                                                                                                                                                                                                

exec "$@"