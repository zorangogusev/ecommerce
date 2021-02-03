
composer install

sudo docker-compose up -d --build

for Database connection in .env file add
DATABASE_URL="mysql://zoran:zoran@127.0.0.1:4306/ecommerce?serverVersion=5.7"

add in /etc/hosts file
172.172.202.100    ecommerce.deb.test
to open project in the browser enter in browser ecommerce.deb.test

if necessary to enter in ecommerce container
sudo docker exec -it ecommerce /bin/bash

if necessary to enter in ecommerce-mariadb-10.1 container
sudo docker exec -it ecommerce-mariadb-10.1 /bin/bash
