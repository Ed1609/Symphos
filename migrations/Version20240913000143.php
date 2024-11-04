<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240913000143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, id_utilisateur INT NOT NULL, id_produit INT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, quantity INT NOT NULL, statut TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, libele VARCHAR(255) NOT NULL, prix NUMERIC(10, 2) NOT NULL, type_produit VARCHAR(255) NOT NULL, discount_price NUMERIC(10, 2) DEFAULT NULL, image_url VARCHAR(255) NOT NULL, quantite INT NOT NULL, add_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', admin VARCHAR(100) NOT NULL, section VARCHAR(25) NOT NULL, image_url1 VARCHAR(255) DEFAULT NULL, image_url2 VARCHAR(255) DEFAULT NULL, image_url3 VARCHAR(255) DEFAULT NULL, image_url4 VARCHAR(255) DEFAULT NULL, image_url5 VARCHAR(255) DEFAULT NULL, image_url6 VARCHAR(255) DEFAULT NULL, description1 LONGTEXT DEFAULT NULL, description2 LONGTEXT DEFAULT NULL, description3 LONGTEXT DEFAULT NULL, description4 LONGTEXT DEFAULT NULL, taille VARCHAR(255) DEFAULT NULL, couleur VARCHAR(255) DEFAULT NULL, image_url_dump1 VARCHAR(255) DEFAULT NULL, image_url_dump2 VARCHAR(255) DEFAULT NULL, image_url_dump3 VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, en_promotion TINYINT(1) NOT NULL, slide_promo VARCHAR(255) DEFAULT NULL, non_collection VARCHAR(255) NOT NULL, detail_promo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_dynamique (id INT AUTO_INCREMENT NOT NULL, id_produit_id INT NOT NULL, image_promo VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', dureer_jour INT NOT NULL, INDEX IDX_795DD337AABEFE2C (id_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, duree_livraison INT NOT NULL, partenaire_transite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promo_dynamique ADD CONSTRAINT FK_795DD337AABEFE2C FOREIGN KEY (id_produit_id) REFERENCES product (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo_dynamique DROP FOREIGN KEY FK_795DD337AABEFE2C');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE promo_dynamique');
        $this->addSql('DROP TABLE ville');
    }
}
