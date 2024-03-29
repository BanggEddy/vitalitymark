<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319101609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD idpromo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF27A1532F2 FOREIGN KEY (idpromo_id) REFERENCES promo (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF27A1532F2 ON panier (idpromo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF27A1532F2');
        $this->addSql('DROP INDEX IDX_24CC0DF27A1532F2 ON panier');
        $this->addSql('ALTER TABLE panier DROP idpromo_id');
    }
}
