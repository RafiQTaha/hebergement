<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705161148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pgroupe (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, niveau VARCHAR(10) DEFAULT NULL, INDEX IDX_C47F22D77A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pgroupe ADD CONSTRAINT FK_C47F22D77A45358C FOREIGN KEY (groupe_id) REFERENCES pgroupe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pgroupe DROP FOREIGN KEY FK_C47F22D77A45358C');
        $this->addSql('DROP TABLE pgroupe');
    }
}
