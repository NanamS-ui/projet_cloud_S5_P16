<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241217111154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gender (gender_id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(gender_id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7470A425E237E06 ON gender (name)');
        $this->addSql('CREATE TABLE role (role_id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(role_id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_57698A6A5E237E06 ON role (name)');
        $this->addSql('CREATE TABLE users (user_id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, birth_date DATE NOT NULL, token VARCHAR(50) DEFAULT NULL, gender_id INT NOT NULL, role_id INT NOT NULL, PRIMARY KEY(user_id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9F85E0677 ON users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E95F37A13B ON users (token)');
        $this->addSql('CREATE INDEX IDX_1483A5E9708A0E0 ON users (gender_id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9D60322AC ON users (role_id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (gender_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9D60322AC FOREIGN KEY (role_id) REFERENCES role (role_id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9708A0E0');
        $this->addSql('ALTER TABLE users DROP CONSTRAINT FK_1483A5E9D60322AC');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE users');
    }
}
