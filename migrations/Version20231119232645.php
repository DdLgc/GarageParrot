<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231119232645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E48648FFD3DA');
        $this->addSql('DROP INDEX IDX_1B80E48648FFD3DA ON vehicle');
        $this->addSql('ALTER TABLE vehicle CHANGE garage_id_id garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E486C4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_1B80E486C4FFF555 ON vehicle (garage_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E486C4FFF555');
        $this->addSql('DROP INDEX IDX_1B80E486C4FFF555 ON vehicle');
        $this->addSql('ALTER TABLE vehicle CHANGE garage_id garage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E48648FFD3DA FOREIGN KEY (garage_id_id) REFERENCES garage (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_1B80E48648FFD3DA ON vehicle (garage_id_id)');
    }
}
