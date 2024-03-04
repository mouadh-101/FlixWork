<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218020910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE interview (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT NOT NULL, freelancer_id INT NOT NULL, interview_date DATE NOT NULL, interview_link VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, etat VARCHAR(50) NOT NULL, INDEX IDX_CF1D3C34156BE243 (recruiter_id), INDEX IDX_CF1D3C348545BDF5 (freelancer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, recruiter_id INT NOT NULL, category_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, deadline DATE NOT NULL, type VARCHAR(50) NOT NULL, salary DOUBLE PRECISION NOT NULL, INDEX IDX_FBD8E0F8156BE243 (recruiter_id), INDEX IDX_FBD8E0F812469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postulation (id INT AUTO_INCREMENT NOT NULL, freelancer_id INT NOT NULL, job_id INT NOT NULL, postulation_date DATE NOT NULL, cover_letter VARCHAR(500) NOT NULL, etat VARCHAR(50) NOT NULL, INDEX IDX_DA7D4E9B8545BDF5 (freelancer_id), INDEX IDX_DA7D4E9BBE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE interview ADD CONSTRAINT FK_CF1D3C34156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE interview ADD CONSTRAINT FK_CF1D3C348545BDF5 FOREIGN KEY (freelancer_id) REFERENCES freelancer (id)');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8156BE243 FOREIGN KEY (recruiter_id) REFERENCES recruiter (id)');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F812469DE2 FOREIGN KEY (category_id) REFERENCES jobs_category (id)');
        $this->addSql('ALTER TABLE postulation ADD CONSTRAINT FK_DA7D4E9B8545BDF5 FOREIGN KEY (freelancer_id) REFERENCES freelancer (id)');
        $this->addSql('ALTER TABLE postulation ADD CONSTRAINT FK_DA7D4E9BBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE recruiter ADD full_name VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD user_type VARCHAR(255) NOT NULL, ADD roles JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interview DROP FOREIGN KEY FK_CF1D3C34156BE243');
        $this->addSql('ALTER TABLE interview DROP FOREIGN KEY FK_CF1D3C348545BDF5');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8156BE243');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F812469DE2');
        $this->addSql('ALTER TABLE postulation DROP FOREIGN KEY FK_DA7D4E9B8545BDF5');
        $this->addSql('ALTER TABLE postulation DROP FOREIGN KEY FK_DA7D4E9BBE04EA9');
        $this->addSql('DROP TABLE interview');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE postulation');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE recruiter DROP full_name, DROP email, DROP password, DROP user_type, DROP roles, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP roles');
    }
}
