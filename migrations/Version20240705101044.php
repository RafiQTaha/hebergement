<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705101044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE grille (id INT AUTO_INCREMENT NOT NULL, usercreated_id INT DEFAULT NULL, user_updated_id INT DEFAULT NULL, code VARCHAR(10) DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, active DOUBLE PRECISION NOT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX IDX_D452165F139C32BD (usercreated_id), INDEX IDX_D452165F316B011F (user_updated_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE grille ADD CONSTRAINT FK_D452165F139C32BD FOREIGN KEY (usercreated_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE grille ADD CONSTRAINT FK_D452165F316B011F FOREIGN KEY (user_updated_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE grille DROP FOREIGN KEY FK_D452165F139C32BD');
        $this->addSql('ALTER TABLE grille DROP FOREIGN KEY FK_D452165F316B011F');
        $this->addSql('DROP TABLE grille');
    }
}
