<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117154206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE garage (id INT AUTO_INCREMENT NOT NULL, administrator_id_id INT DEFAULT NULL, day_of_week VARCHAR(255) NOT NULL, opening_hours_am VARCHAR(255) NOT NULL, opening_hours_pm VARCHAR(255) NOT NULL, closing_hours_am VARCHAR(255) NOT NULL, closing_hours_pm VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_9F26610BA1768AFE (administrator_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE testimonial (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, user_name VARCHAR(180) NOT NULL, comment VARCHAR(255) NOT NULL, rating SMALLINT NOT NULL, moderation TINYINT(1) NOT NULL, INDEX IDX_E6BDCDF79D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610BA1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF79D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE testimonials DROP FOREIGN KEY FK_383115799D86650F');
        $this->addSql('ALTER TABLE opening_garage DROP FOREIGN KEY FK_9B511D62A1768AFE');
        $this->addSql('DROP TABLE testimonials');
        $this->addSql('DROP TABLE opening_garage');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE testimonials (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, user_name VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, comment VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, rating SMALLINT NOT NULL, moderation TINYINT(1) NOT NULL, INDEX IDX_383115799D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE opening_garage (id INT AUTO_INCREMENT NOT NULL, administrator_id_id INT DEFAULT NULL, day_of_week VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, opening_hours VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, closing_hours VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_9B511D62A1768AFE (administrator_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE testimonials ADD CONSTRAINT FK_383115799D86650F FOREIGN KEY (user_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE opening_garage ADD CONSTRAINT FK_9B511D62A1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610BA1768AFE');
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF79D86650F');
        $this->addSql('DROP TABLE garage');
        $this->addSql('DROP TABLE testimonial');
    }
}
