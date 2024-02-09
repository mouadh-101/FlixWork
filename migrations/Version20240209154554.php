<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209154554 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer ADD claim_id INT NOT NULL, ADD answer_id INT NOT NULL');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A257096A49F FOREIGN KEY (claim_id) REFERENCES claim (id)');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A25AA334807 FOREIGN KEY (answer_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DADD4A257096A49F ON answer (claim_id)');
        $this->addSql('CREATE INDEX IDX_DADD4A25AA334807 ON answer (answer_id)');
        $this->addSql('ALTER TABLE claim ADD claimer_id INT NOT NULL');
        $this->addSql('ALTER TABLE claim ADD CONSTRAINT FK_A769DE27DCEC9C2A FOREIGN KEY (claimer_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A769DE27DCEC9C2A ON claim (claimer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A257096A49F');
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A25AA334807');
        $this->addSql('DROP INDEX IDX_DADD4A257096A49F ON answer');
        $this->addSql('DROP INDEX IDX_DADD4A25AA334807 ON answer');
        $this->addSql('ALTER TABLE answer DROP claim_id, DROP answer_id');
        $this->addSql('ALTER TABLE claim DROP FOREIGN KEY FK_A769DE27DCEC9C2A');
        $this->addSql('DROP INDEX IDX_A769DE27DCEC9C2A ON claim');
        $this->addSql('ALTER TABLE claim DROP claimer_id');
    }
}
