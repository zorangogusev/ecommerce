
git clone https://github.com/zorangogusev/ecommerce.git ecommerce

sudo docker-compose up -d --build


cd ecommerce

composer install

mkdir .docker/db_data

### Execute the migration and seed data in tables

    php bin/console doctrine:migrations:migrate

### Add in /etc/hosts file

    172.172.202.100    ecommerce.deb.test

### To open project in the browser enter in browser 

    ecommerce.deb.test

### To run test

    php bin/phpunit tests/UnitTests/HomeTest

### If necessary to revert all migration

    php bin/console doctrine:migrations:migrate first -n
