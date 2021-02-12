
git clone https://github.com/zorangogusev/ecommerce.git ecommerce

cd ecommerce

rename file .env.example to .env

composer install

sudo docker-compose up -d --build

### Execute the migration and seed data in tables

    php bin/console doctrine:migrations:migrate

### Add in hosts file

    172.172.202.100    ecommerce.deb.test

### To open project in the browser enter in browser 

    http://ecommerce.deb.test

### If necessary to revert all migration

    php bin/console doctrine:migrations:migrate first -n
