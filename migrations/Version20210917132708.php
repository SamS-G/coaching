<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210917132708 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, coach_id_id INT NOT NULL, date_created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL, location VARCHAR(255) NOT NULL, nb_student INT NOT NULL, canceled TINYINT(1) NOT NULL, INDEX IDX_FE38F8449D86650F (user_id_id), INDEX IDX_FE38F8446BC6FD7D (coach_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(64) NOT NULL, lastname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE schedule (id INT AUTO_INCREMENT NOT NULL, coach_id_id INT NOT NULL, start_from DATETIME NOT NULL, end_to DATETIME NOT NULL, INDEX IDX_5A3811FB6BC6FD7D (coach_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, service_name VARCHAR(255) NOT NULL, duration TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, zip_code VARCHAR(6) NOT NULL, city VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8449D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8446BC6FD7D FOREIGN KEY (coach_id_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE schedule ADD CONSTRAINT FK_5A3811FB6BC6FD7D FOREIGN KEY (coach_id_id) REFERENCES coach (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8446BC6FD7D');
        $this->addSql('ALTER TABLE schedule DROP FOREIGN KEY FK_5A3811FB6BC6FD7D');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8449D86650F');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE schedule');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
    }
}
