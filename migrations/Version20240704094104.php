<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704094104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ac_departement DROP FOREIGN KEY FK_974E8EFAFF631228');
        $this->addSql('DROP INDEX IDX_974E8EFAFF631228 ON ac_departement');
        $this->addSql('ALTER TABLE ac_departement DROP etablissement_id');
        $this->addSql('ALTER TABLE petages DROP FOREIGN KEY FK_3AEB2514D6F6891B');
        $this->addSql('DROP INDEX IDX_3AEB2514D6F6891B ON petages');
        $this->addSql('ALTER TABLE petages ADD user_created_id INT DEFAULT NULL, ADD user_updated_id INT DEFAULT NULL, ADD active DOUBLE PRECISION DEFAULT NULL, ADD created DATETIME DEFAULT NULL, ADD updated DATETIME DEFAULT NULL, CHANGE batiment_id departement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE petages ADD CONSTRAINT FK_3AEB2514CCF9E01E FOREIGN KEY (departement_id) REFERENCES ac_departement (id)');
        $this->addSql('ALTER TABLE petages ADD CONSTRAINT FK_3AEB2514F987D8A8 FOREIGN KEY (user_created_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE petages ADD CONSTRAINT FK_3AEB2514316B011F FOREIGN KEY (user_updated_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_3AEB2514CCF9E01E ON petages (departement_id)');
        $this->addSql('CREATE INDEX IDX_3AEB2514F987D8A8 ON petages (user_created_id)');
        $this->addSql('CREATE INDEX IDX_3AEB2514316B011F ON petages (user_updated_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ac_departement ADD etablissement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ac_departement ADD CONSTRAINT FK_974E8EFAFF631228 FOREIGN KEY (etablissement_id) REFERENCES ac_etablissement (id)');
        $this->addSql('CREATE INDEX IDX_974E8EFAFF631228 ON ac_departement (etablissement_id)');
        $this->addSql('ALTER TABLE petages DROP FOREIGN KEY FK_3AEB2514CCF9E01E');
        $this->addSql('ALTER TABLE petages DROP FOREIGN KEY FK_3AEB2514F987D8A8');
        $this->addSql('ALTER TABLE petages DROP FOREIGN KEY FK_3AEB2514316B011F');
        $this->addSql('DROP INDEX IDX_3AEB2514CCF9E01E ON petages');
        $this->addSql('DROP INDEX IDX_3AEB2514F987D8A8 ON petages');
        $this->addSql('DROP INDEX IDX_3AEB2514316B011F ON petages');
        $this->addSql('ALTER TABLE petages ADD batiment_id INT DEFAULT NULL, DROP departement_id, DROP user_created_id, DROP user_updated_id, DROP active, DROP created, DROP updated');
        $this->addSql('ALTER TABLE petages ADD CONSTRAINT FK_3AEB2514D6F6891B FOREIGN KEY (batiment_id) REFERENCES pbatiments (id)');
        $this->addSql('CREATE INDEX IDX_3AEB2514D6F6891B ON petages (batiment_id)');
    }
}
