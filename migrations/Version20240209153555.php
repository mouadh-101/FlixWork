<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209153555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE postulation ADD freelancer_id INT NOT NULL, ADD job_id INT NOT NULL');
        $this->addSql('ALTER TABLE postulation ADD CONSTRAINT FK_DA7D4E9B8545BDF5 FOREIGN KEY (freelancer_id) REFERENCES freelancer (id)');
        $this->addSql('ALTER TABLE postulation ADD CONSTRAINT FK_DA7D4E9BBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('CREATE INDEX IDX_DA7D4E9B8545BDF5 ON postulation (freelancer_id)');
        $this->addSql('CREATE INDEX IDX_DA7D4E9BBE04EA9 ON postulation (job_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE postulation DROP FOREIGN KEY FK_DA7D4E9B8545BDF5');
        $this->addSql('ALTER TABLE postulation DROP FOREIGN KEY FK_DA7D4E9BBE04EA9');
        $this->addSql('DROP INDEX IDX_DA7D4E9B8545BDF5 ON postulation');
        $this->addSql('DROP INDEX IDX_DA7D4E9BBE04EA9 ON postulation');
        $this->addSql('ALTER TABLE postulation DROP freelancer_id, DROP job_id');
    }
}
