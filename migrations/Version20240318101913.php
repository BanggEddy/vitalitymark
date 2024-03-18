<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318101913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE images');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBD9F966B');
        $this->addSql('DROP INDEX IDX_B0139AFBD9F966B ON promo');
        $this->addSql('ALTER TABLE promo ADD description VARCHAR(255) NOT NULL, DROP description_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE promo ADD description_id INT DEFAULT NULL, DROP description');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBD9F966B FOREIGN KEY (description_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_B0139AFBD9F966B ON promo (description_id)');
    }
}
