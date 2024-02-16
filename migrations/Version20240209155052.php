<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209155052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interview ADD recruiter_id INT NOT NULL, ADD freelancer_id INT NOT NULL');
        $this->addSql('ALTER TABLE interview ADD CONSTRAINT FK_CF1D3C34156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE interview ADD CONSTRAINT FK_CF1D3C348545BDF5 FOREIGN KEY (freelancer_id) REFERENCES freelancer (id)');
        $this->addSql('CREATE INDEX IDX_CF1D3C34156BE243 ON interview (recruiter_id)');
        $this->addSql('CREATE INDEX IDX_CF1D3C348545BDF5 ON interview (freelancer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interview DROP FOREIGN KEY FK_CF1D3C34156BE243');
        $this->addSql('ALTER TABLE interview DROP FOREIGN KEY FK_CF1D3C348545BDF5');
        $this->addSql('DROP INDEX IDX_CF1D3C34156BE243 ON interview');
        $this->addSql('DROP INDEX IDX_CF1D3C348545BDF5 ON interview');
        $this->addSql('ALTER TABLE interview DROP recruiter_id, DROP freelancer_id');
    }
}
