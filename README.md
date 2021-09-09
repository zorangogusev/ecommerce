### Small project created on given photo and instructions
[example_photo_link](https://github.com/zorangogusev/ecommerce/blob/master/example-image.png)

### Used Technologies
    
    Docker(PHP8.0, Maria-DB-10.1), HTML, CSS, Symhony5.2

### Live demo on Heroku
[http://app-ecommerce-project.herokuapp.com/](http://app-ecommerce-project.herokuapp.com/)

### Installation

git clone https://github.com/zorangogusev/ecommerce.git ecommerce

cd ecommerce

rename file .env.example to .env

composer install

sudo docker-compose up -d --build

### Execute the migration and seed data in tables

    php bin/console doctrine:migrations:migrate

### Add in hosts file

    172.172.210.100    ecommerce.test

### To open project in the browser enter in browser 

    http://ecommerce.deb.test

### If necessary to revert all migration

    php bin/console doctrine:migrations:migrate first -n
