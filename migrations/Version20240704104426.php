<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704104426 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tchambre (id INT AUTO_INCREMENT NOT NULL, etage_id INT DEFAULT NULL, user_created_id INT DEFAULT NULL, user_updated_id INT DEFAULT NULL, code VARCHAR(10) DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, abreviation VARCHAR(5) DEFAULT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, active DOUBLE PRECISION DEFAULT NULL, INDEX IDX_155D7B82984CE93F (etage_id), INDEX IDX_155D7B82F987D8A8 (user_created_id), INDEX IDX_155D7B82316B011F (user_updated_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B82984CE93F FOREIGN KEY (etage_id) REFERENCES petages (id)');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B82F987D8A8 FOREIGN KEY (user_created_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tchambre ADD CONSTRAINT FK_155D7B82316B011F FOREIGN KEY (user_updated_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B82984CE93F');
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B82F987D8A8');
        $this->addSql('ALTER TABLE tchambre DROP FOREIGN KEY FK_155D7B82316B011F');
        $this->addSql('DROP TABLE tchambre');
    }
}
