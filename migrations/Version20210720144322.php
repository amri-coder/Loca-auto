<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720144322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brands (id INT AUTO_INCREMENT NOT NULL, brand VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cars (id INT AUTO_INCREMENT NOT NULL, brands_id INT NOT NULL, gears_id INT NOT NULL, engines_id INT NOT NULL, seat_id INT NOT NULL, fleets_id INT NOT NULL, registation_number VARCHAR(50) NOT NULL, availability TINYINT(1) NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_95C71D14E9EEC0C7 (brands_id), INDEX IDX_95C71D14C6B26989 (gears_id), INDEX IDX_95C71D14743D8A7 (engines_id), INDEX IDX_95C71D14C1DAFE35 (seat_id), INDEX IDX_95C71D14235BF180 (fleets_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE engines (id INT AUTO_INCREMENT NOT NULL, engine VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fleet (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gears (id INT AUTO_INCREMENT NOT NULL, gear VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rental (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, car_id INT NOT NULL, car_rental_date DATE NOT NULL, car_rental_return_date DATE NOT NULL, INDEX IDX_1619C27D67B3B43D (users_id), INDEX IDX_1619C27DC3C6F69F (car_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seat (id INT AUTO_INCREMENT NOT NULL, seats INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(50) NOT NULL, first_name VARCHAR(50) NOT NULL, birth_date DATE NOT NULL, phone_number VARCHAR(50) NOT NULL, address VARCHAR(150) NOT NULL, city VARCHAR(50) NOT NULL, zipcode VARCHAR(50) NOT NULL, country VARCHAR(150) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14E9EEC0C7 FOREIGN KEY (brands_id) REFERENCES brands (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14C6B26989 FOREIGN KEY (gears_id) REFERENCES gears (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14743D8A7 FOREIGN KEY (engines_id) REFERENCES engines (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14C1DAFE35 FOREIGN KEY (seat_id) REFERENCES seat (id)');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D14235BF180 FOREIGN KEY (fleets_id) REFERENCES fleet (id)');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27D67B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rental ADD CONSTRAINT FK_1619C27DC3C6F69F FOREIGN KEY (car_id) REFERENCES cars (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14E9EEC0C7');
        $this->addSql('ALTER TABLE rental DROP FOREIGN KEY FK_1619C27DC3C6F69F');
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14743D8A7');
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14235BF180');
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14C6B26989');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE cars DROP FOREIGN KEY FK_95C71D14C1DAFE35');
        $this->addSql('ALTER TABLE rental DROP FOREIGN KEY FK_1619C27D67B3B43D');
        $this->addSql('DROP TABLE brands');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE engines');
        $this->addSql('DROP TABLE fleet');
        $this->addSql('DROP TABLE gears');
        $this->addSql('DROP TABLE rental');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE seat');
        $this->addSql('DROP TABLE user');
    }
}
