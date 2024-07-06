<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704113623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nature_chambre (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) DEFAULT NULL, abreviation VARCHAR(5) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_chambre (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) DEFAULT NULL, abreviation VARCHAR(5) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tchambre ADD type_chambre_id INT DEFAULT NULL, ADD nature_chambre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B828614A971 FOREIGN KEY (type_chambre_id) REFERENCES type_chambre (id)');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B827769CCC3 FOREIGN KEY (nature_chambre_id) REFERENCES nature_chambre (id)');
        $this->addSql('CREATE INDEX IDX_155D7B828614A971 ON tchambre (type_chambre_id)');
        $this->addSql('CREATE INDEX IDX_155D7B827769CCC3 ON tchambre (nature_chambre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B827769CCC3');
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B828614A971');
        $this->addSql('DROP TABLE nature_chambre');
        $this->addSql('DROP TABLE type_chambre');
        $this->addSql('DROP INDEX IDX_155D7B828614A971 ON tchambre');
        $this->addSql('DROP INDEX IDX_155D7B827769CCC3 ON tchambre');
        $this->addSql('ALTER TABLE tchambre DROP type_chambre_id, DROP nature_chambre_id');
    }
}
