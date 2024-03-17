<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240317111308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, idproduct_id INT DEFAULT NULL, reduction VARCHAR(255) DEFAULT NULL, date_fin DATE DEFAULT NULL, date_debut DATE DEFAULT NULL, INDEX IDX_B0139AFB882D7B60 (idproduct_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB882D7B60 FOREIGN KEY (idproduct_id) REFERENCES products (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB882D7B60');
        $this->addSql('DROP TABLE promo');
    }
}
