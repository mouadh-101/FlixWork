<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219184246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer ADD answer_for_id INT NOT NULL');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A25DEC2E3EA FOREIGN KEY (answer_for_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DADD4A25DEC2E3EA ON answer (answer_for_id)');
        $this->addSql('ALTER TABLE claim ADD claim_for_id INT NOT NULL');
        $this->addSql('ALTER TABLE claim ADD CONSTRAINT FK_A769DE27B3B87003 FOREIGN KEY (claim_for_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A769DE27B3B87003 ON claim (claim_for_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A25DEC2E3EA');
        $this->addSql('DROP INDEX IDX_DADD4A25DEC2E3EA ON answer');
        $this->addSql('ALTER TABLE answer DROP answer_for_id');
        $this->addSql('ALTER TABLE claim DROP FOREIGN KEY FK_A769DE27B3B87003');
        $this->addSql('DROP INDEX IDX_A769DE27B3B87003 ON claim');
        $this->addSql('ALTER TABLE claim DROP claim_for_id');
    }
}
