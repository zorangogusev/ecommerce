<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version99999999999999 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $date = date("Y-m-d H:i:s");

        /** Start Insert data in category table */
        $this->addSql('INSERT INTO category (id, parent_id, name, description, created_at) VALUES (1, 0, "women", "clothes for woman", "' . $date . '" );');
        $this->addSql('INSERT INTO category (id, parent_id, name, description, created_at) VALUES (2, 0, "man", "clothes for man", "' . $date . '" );');
        $this->addSql('INSERT INTO category (id, parent_id, name, description, created_at) VALUES (3, 0, "kids", "clothes for kids", "' . $date . '" );');
        /** End Insert data in category table */


        /** Start Insert data in product table */
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (1, 1, "Shirt-1", "Black Shirt", "image-1.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (2, 1, "Shirt-2", "White Shirt", "image-2.jpeg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (3, 1, "Shirt-3", "Yellow Shirt", "image-3.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (4, 1, "Shirt-4", "Green Shirt", "image-4.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (5, 1, "Shirt-5", "Orange Shirt", "image-5.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (6, 1, "Shirt-6", "Purpple Shirt", "image-6.jpeg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (7, 1, "Shirt-1", "Blue Shirt", "image-7.jpeg", "' . $date . '" );');


        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (8, 2, "Costume-8", "Blue Costume", "image-8.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (9, 2, "Costume-9", "White Costume", "image-9.jpeg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (10, 2, "Costume-10", "Yellow Costume", "image-10.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (11, 2, "Costume-11", "Green Costume", "image-11.jpg", "' . $date . '" );');
        $this->addSql('INSERT INTO product (id, category_id, name, description, image, created_at) VALUES (12, 2, "Costume-12", "Orange Costume", "image-12.jpeg", "' . $date . '" );');
        /** End Insert data in product table */


        /** Start Insert data in product attributes table */
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (1, 1, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (2, 1, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (3, 2, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (4, 2, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (5, 3, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (6, 3, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (7, 4, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (8, 4, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (9, 5, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (10, 5, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (11, 6, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (12, 6, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (13, 7, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (14, 7, "XXL", 20, "' . $date . '" );');

        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (15, 8, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (16, 8, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (17, 9, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (18, 9, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (19, 9, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (20, 9, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (21, 10, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (22, 10, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (23, 11, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (24, 11, "XXL", 20, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (25, 12, "M", 10, "' . $date . '" );');
        $this->addSql('INSERT INTO product_attributes (id, product_id, size, price, created_at) VALUES (26, 12, "XXL", 20, "' . $date . '" );');
        /** End Insert data in product attributes table */


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
