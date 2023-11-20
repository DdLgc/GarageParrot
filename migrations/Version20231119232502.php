<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231119232502 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8DA1768AFE');
        $this->addSql('DROP INDEX UNIQ_8A1ABD8DA1768AFE ON hours');
        $this->addSql('ALTER TABLE hours CHANGE administrator_id_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8D48FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8A1ABD8D48FFD3DA ON hours (garage_id_id)');
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF79D86650F');
        $this->addSql('DROP INDEX IDX_E6BDCDF79D86650F ON testimonial');
        $this->addSql('ALTER TABLE testimonial CHANGE user_id_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF748FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_E6BDCDF748FFD3DA ON testimonial (garage_id_id)');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E4869D86650F');
        $this->addSql('DROP INDEX IDX_1B80E4869D86650F ON vehicle');
        $this->addSql('ALTER TABLE vehicle CHANGE user_id_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E48648FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_1B80E48648FFD3DA ON vehicle (garage_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF748FFD3DA');
        $this->addSql('DROP INDEX IDX_E6BDCDF748FFD3DA ON testimonial');
        $this->addSql('ALTER TABLE testimonial CHANGE garage_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF79D86650F FOREIGN KEY (user_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E6BDCDF79D86650F ON testimonial (user_id_id)');
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8D48FFD3DA');
        $this->addSql('DROP INDEX UNIQ_8A1ABD8D48FFD3DA ON hours');
        $this->addSql('ALTER TABLE hours CHANGE garage_id_id administrator_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8DA1768AFE FOREIGN KEY (administrator_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8A1ABD8DA1768AFE ON hours (administrator_id_id)');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E48648FFD3DA');
        $this->addSql('DROP INDEX IDX_1B80E48648FFD3DA ON vehicle');
        $this->addSql('ALTER TABLE vehicle CHANGE garage_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E4869D86650F FOREIGN KEY (user_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1B80E4869D86650F ON vehicle (user_id_id)');
    }
}
