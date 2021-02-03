
composer install

mkdir .docker/db_data

sudo docker-compose up -d --build


### Add in /etc/hosts file

    172.172.202.100    ecommerce.deb.test

### To open project in the browser enter in browser 

    ecommerce.deb.test

### If necessary to enter in ecommerce container

    sudo docker exec -it ecommerce /bin/bash

### If necessary to enter in ecommerce-mariadb-10.1 container

    sudo docker exec -it ecommerce-mariadb-10.1 /bin/bash
