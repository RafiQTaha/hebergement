<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240708160802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE toperationdet ADD grille_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE toperationdet ADD CONSTRAINT FK_D37CF665985C2966 FOREIGN KEY (grille_id) REFERENCES grille (id)');
        $this->addSql('CREATE INDEX IDX_D37CF665985C2966 ON toperationdet (grille_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE toperationdet DROP FOREIGN KEY FK_D37CF665985C2966');
        $this->addSql('DROP INDEX IDX_D37CF665985C2966 ON toperationdet');
        $this->addSql('ALTER TABLE toperationdet DROP grille_id');
    }
}
