<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240708140451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE toperationcab ADD lit_inscription_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE toperationcab ADD CONSTRAINT FK_468B90B5D32B55A1 FOREIGN KEY (lit_inscription_id) REFERENCES lit_inscription (id)');
        $this->addSql('CREATE INDEX IDX_468B90B5D32B55A1 ON toperationcab (lit_inscription_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE toperationcab DROP FOREIGN KEY FK_468B90B5D32B55A1');
        $this->addSql('DROP INDEX IDX_468B90B5D32B55A1 ON toperationcab');
        $this->addSql('ALTER TABLE toperationcab DROP lit_inscription_id');
    }
}
