<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705104404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B827769CCC3');
        $this->addSql('CREATE TABLE statut_chambre (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) DEFAULT NULL, abreviation VARCHAR(5) DEFAULT NULL, active DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE nature_chambre');
        $this->addSql('DROP INDEX IDX_155D7B827769CCC3 ON tchambre');
        $this->addSql('ALTER TABLE tchambre CHANGE nature_chambre_id statut_chambre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B82EEDC725D FOREIGN KEY (statut_chambre_id) REFERENCES statut_chambre (id)');
        $this->addSql('CREATE INDEX IDX_155D7B82EEDC725D ON tchambre (statut_chambre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B82EEDC725D');
        $this->addSql('CREATE TABLE nature_chambre (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, abreviation VARCHAR(5) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, active DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE statut_chambre');
        $this->addSql('DROP INDEX IDX_155D7B82EEDC725D ON tchambre');
        $this->addSql('ALTER TABLE tchambre CHANGE statut_chambre_id nature_chambre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B827769CCC3 FOREIGN KEY (nature_chambre_id) REFERENCES nature_chambre (id)');
        $this->addSql('CREATE INDEX IDX_155D7B827769CCC3 ON tchambre (nature_chambre_id)');
    }
}
