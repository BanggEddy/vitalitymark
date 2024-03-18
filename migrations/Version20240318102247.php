<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318102247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD44F05E5');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB7E8B4AFC');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD614C7E7');
        $this->addSql('DROP INDEX IDX_B0139AFBD44F05E5 ON promo');
        $this->addSql('DROP INDEX IDX_B0139AFBD614C7E7 ON promo');
        $this->addSql('DROP INDEX IDX_B0139AFB7E8B4AFC ON promo');
        $this->addSql('ALTER TABLE promo ADD quantity INT DEFAULT NULL, ADD price DOUBLE PRECISION DEFAULT NULL, ADD images VARCHAR(255) DEFAULT NULL, DROP price_id, DROP quantity_id, DROP images_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo ADD quantity_id INT DEFAULT NULL, ADD images_id INT DEFAULT NULL, DROP price, DROP images, CHANGE quantity price_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD44F05E5 FOREIGN KEY (images_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB7E8B4AFC FOREIGN KEY (quantity_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD614C7E7 FOREIGN KEY (price_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD44F05E5 ON promo (images_id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD614C7E7 ON promo (price_id)');
        $this->addSql('CREATE INDEX IDX_B0139AFB7E8B4AFC ON promo (quantity_id)');
    }
}
