<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240317225327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo ADD price_id INT DEFAULT NULL, DROP price');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD614C7E7 FOREIGN KEY (price_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD614C7E7 ON promo (price_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD614C7E7');
        $this->addSql('DROP INDEX IDX_B0139AFBD614C7E7 ON promo');
        $this->addSql('ALTER TABLE promo ADD price DOUBLE PRECISION DEFAULT NULL, DROP price_id');
    }
}
