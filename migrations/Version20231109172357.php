<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231109172357 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, first_name VARCHAR(180) NOT NULL, last_name VARCHAR(180) NOT NULL, email VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4C62E6389D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening_garage (id INT AUTO_INCREMENT NOT NULL, administrator_id_id INT DEFAULT NULL, day_of_week VARCHAR(255) NOT NULL, opening_hours VARCHAR(255) NOT NULL, closing_hours VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_9B511D62A1768AFE (administrator_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, service_name VARCHAR(180) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE testimonials (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, user_name VARCHAR(180) NOT NULL, comment VARCHAR(255) NOT NULL, rating SMALLINT NOT NULL, moderation TINYINT(1) NOT NULL, INDEX IDX_383115799D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicle (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, price INT NOT NULL, model VARCHAR(180) NOT NULL, mileage INT NOT NULL, year_of_registration DATETIME NOT NULL, equipment VARCHAR(255) NOT NULL, front_pic JSON NOT NULL, pics JSON DEFAULT NULL, INDEX IDX_1B80E4869D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6389D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE opening_garage ADD CONSTRAINT FK_9B511D62A1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE testimonials ADD CONSTRAINT FK_383115799D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E4869D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649ED5CA9E6 ON user (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649ED5CA9E6');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6389D86650F');
        $this->addSql('ALTER TABLE opening_garage DROP FOREIGN KEY FK_9B511D62A1768AFE');
        $this->addSql('ALTER TABLE testimonials DROP FOREIGN KEY FK_383115799D86650F');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E4869D86650F');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE opening_garage');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE testimonials');
        $this->addSql('DROP TABLE vehicle');
        $this->addSql('DROP INDEX IDX_8D93D649ED5CA9E6 ON user');
        $this->addSql('ALTER TABLE user DROP service_id');
    }
}
