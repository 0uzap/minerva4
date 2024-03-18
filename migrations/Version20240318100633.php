<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318100633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ajouter (id INT AUTO_INCREMENT NOT NULL, panier_id INT DEFAULT NULL, livre_id INT DEFAULT NULL, INDEX IDX_AB384B5FF77D927C (panier_id), INDEX IDX_AB384B5F37D925CB (livre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, nomgenre VARCHAR(35) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livre (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, genre_id INT DEFAULT NULL, titre VARCHAR(150) NOT NULL, auteur VARCHAR(75) NOT NULL, prix VARCHAR(255) NOT NULL, date_publi DATE NOT NULL, editeur VARCHAR(50) NOT NULL, langue VARCHAR(50) NOT NULL, couverture VARCHAR(255) NOT NULL, resume LONGTEXT NOT NULL, format VARCHAR(15) DEFAULT NULL, INDEX IDX_AC634F99C54C8C93 (type_id), INDEX IDX_AC634F994296D31F (genre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, panier_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649F77D927C (panier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ajouter ADD CONSTRAINT FK_AB384B5FF77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE ajouter ADD CONSTRAINT FK_AB384B5F37D925CB FOREIGN KEY (livre_id) REFERENCES livre (id)');
        $this->addSql('ALTER TABLE livre ADD CONSTRAINT FK_AC634F99C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE livre ADD CONSTRAINT FK_AC634F994296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ajouter DROP FOREIGN KEY FK_AB384B5FF77D927C');
        $this->addSql('ALTER TABLE ajouter DROP FOREIGN KEY FK_AB384B5F37D925CB');
        $this->addSql('ALTER TABLE livre DROP FOREIGN KEY FK_AC634F99C54C8C93');
        $this->addSql('ALTER TABLE livre DROP FOREIGN KEY FK_AC634F994296D31F');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F77D927C');
        $this->addSql('DROP TABLE ajouter');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE livre');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
    }
}
