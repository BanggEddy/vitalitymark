<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240317225645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promo ADD description_id INT DEFAULT NULL, ADD quantity_id INT DEFAULT NULL, ADD images_id INT DEFAULT NULL, DROP quantity, DROP images, DROP description');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD9F966B FOREIGN KEY (description_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB7E8B4AFC FOREIGN KEY (quantity_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD44F05E5 FOREIGN KEY (images_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD9F966B ON promo (description_id)');
        $this->addSql('CREATE INDEX IDX_B0139AFB7E8B4AFC ON promo (quantity_id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD44F05E5 ON promo (images_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE images');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD9F966B');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB7E8B4AFC');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD44F05E5');
        $this->addSql('DROP INDEX IDX_B0139AFBD9F966B ON promo');
        $this->addSql('DROP INDEX IDX_B0139AFB7E8B4AFC ON promo');
        $this->addSql('DROP INDEX IDX_B0139AFBD44F05E5 ON promo');
        $this->addSql('ALTER TABLE promo ADD quantity INT NOT NULL, ADD images VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, DROP description_id, DROP quantity_id, DROP images_id');
    }
}
