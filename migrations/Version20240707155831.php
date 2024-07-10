<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240707155831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lit_inscription (id INT AUTO_INCREMENT NOT NULL, inscription_id INT DEFAULT NULL, lit_id INT DEFAULT NULL, user_created_id INT DEFAULT NULL, user_updated_id INT DEFAULT NULL, start DATE DEFAULT NULL, end DATE DEFAULT NULL, active DOUBLE PRECISION DEFAULT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX IDX_F3260BDC5DAC5993 (inscription_id), INDEX IDX_F3260BDC278B5057 (lit_id), INDEX IDX_F3260BDCF987D8A8 (user_created_id), INDEX IDX_F3260BDC316B011F (user_updated_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lit_inscription ADD CONSTRAINT FK_F3260BDC5DAC5993 FOREIGN KEY (inscription_id) REFERENCES tinscription (id)');
        $this->addSql('ALTER TABLE lit_inscription ADD CONSTRAINT FK_F3260BDC278B5057 FOREIGN KEY (lit_id) REFERENCES lit (id)');
        $this->addSql('ALTER TABLE lit_inscription ADD CONSTRAINT FK_F3260BDCF987D8A8 FOREIGN KEY (user_created_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE lit_inscription ADD CONSTRAINT FK_F3260BDC316B011F FOREIGN KEY (user_updated_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lit_inscription DROP FOREIGN KEY FK_F3260BDC5DAC5993');
        $this->addSql('ALTER TABLE lit_inscription DROP FOREIGN KEY FK_F3260BDC278B5057');
        $this->addSql('ALTER TABLE lit_inscription DROP FOREIGN KEY FK_F3260BDCF987D8A8');
        $this->addSql('ALTER TABLE lit_inscription DROP FOREIGN KEY FK_F3260BDC316B011F');
        $this->addSql('DROP TABLE lit_inscription');
    }
}
