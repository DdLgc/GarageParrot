<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231120201910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8D48FFD3DA');
        $this->addSql('DROP INDEX UNIQ_8A1ABD8D48FFD3DA ON hours');
        $this->addSql('ALTER TABLE hours CHANGE garage_id_id garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8DC4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8A1ABD8DC4FFF555 ON hours (garage_id)');
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF748FFD3DA');
        $this->addSql('DROP INDEX IDX_E6BDCDF748FFD3DA ON testimonial');
        $this->addSql('ALTER TABLE testimonial CHANGE garage_id_id garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF7C4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_E6BDCDF7C4FFF555 ON testimonial (garage_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF7C4FFF555');
        $this->addSql('DROP INDEX IDX_E6BDCDF7C4FFF555 ON testimonial');
        $this->addSql('ALTER TABLE testimonial CHANGE garage_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF748FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E6BDCDF748FFD3DA ON testimonial (garage_id_id)');
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8DC4FFF555');
        $this->addSql('DROP INDEX UNIQ_8A1ABD8DC4FFF555 ON hours');
        $this->addSql('ALTER TABLE hours CHANGE garage_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8D48FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8A1ABD8D48FFD3DA ON hours (garage_id_id)');
    }
}
