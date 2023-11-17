<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117163156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hours (id INT AUTO_INCREMENT NOT NULL, administrator_id_id INT DEFAULT NULL, day_of_week VARCHAR(255) NOT NULL, opening_hours_am VARCHAR(255) NOT NULL, opening_hours_pm VARCHAR(255) NOT NULL, closing_hours_am VARCHAR(255) NOT NULL, closing_hours_pm VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8A1ABD8DA1768AFE (administrator_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8DA1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610BA1768AFE');
        $this->addSql('DROP TABLE garage');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE garage (id INT AUTO_INCREMENT NOT NULL, administrator_id_id INT DEFAULT NULL, day_of_week VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, opening_hours_am VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, opening_hours_pm VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, closing_hours_am VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, closing_hours_pm VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_9F26610BA1768AFE (administrator_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610BA1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8DA1768AFE');
        $this->addSql('DROP TABLE hours');
    }
}
