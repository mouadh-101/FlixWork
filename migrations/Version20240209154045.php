<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209154045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE training ADD trainer_id INT NOT NULL, ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8FFB08EDF6 FOREIGN KEY (trainer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8F12469DE2 FOREIGN KEY (category_id) REFERENCES training_category (id)');
        $this->addSql('CREATE INDEX IDX_D5128A8FFB08EDF6 ON training (trainer_id)');
        $this->addSql('CREATE INDEX IDX_D5128A8F12469DE2 ON training (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8FFB08EDF6');
        $this->addSql('ALTER TABLE training DROP FOREIGN KEY FK_D5128A8F12469DE2');
        $this->addSql('DROP INDEX IDX_D5128A8FFB08EDF6 ON training');
        $this->addSql('DROP INDEX IDX_D5128A8F12469DE2 ON training');
        $this->addSql('ALTER TABLE training DROP trainer_id, DROP category_id');
    }
}
