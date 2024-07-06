<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705101258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE grille ADD type_chambre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE grille ADD CONSTRAINT FK_D452165F8614A971 FOREIGN KEY (type_chambre_id) REFERENCES type_chambre (id)');
        $this->addSql('CREATE INDEX IDX_D452165F8614A971 ON grille (type_chambre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE grille DROP FOREIGN KEY FK_D452165F8614A971');
        $this->addSql('DROP INDEX IDX_D452165F8614A971 ON grille');
        $this->addSql('ALTER TABLE grille DROP type_chambre_id');
    }
}
