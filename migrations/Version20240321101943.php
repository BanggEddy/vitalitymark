<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321101943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coupon (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coupon_loyalty_card (coupon_id INT NOT NULL, loyalty_card_id INT NOT NULL, INDEX IDX_A27DEC6566C5951B (coupon_id), INDEX IDX_A27DEC65260D7293 (loyalty_card_id), PRIMARY KEY(coupon_id, loyalty_card_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coupon_loyalty_card ADD CONSTRAINT FK_A27DEC6566C5951B FOREIGN KEY (coupon_id) REFERENCES coupon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coupon_loyalty_card ADD CONSTRAINT FK_A27DEC65260D7293 FOREIGN KEY (loyalty_card_id) REFERENCES loyalty_card (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE loyalty_card DROP coupon');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupon_loyalty_card DROP FOREIGN KEY FK_A27DEC6566C5951B');
        $this->addSql('ALTER TABLE coupon_loyalty_card DROP FOREIGN KEY FK_A27DEC65260D7293');
        $this->addSql('DROP TABLE coupon');
        $this->addSql('DROP TABLE coupon_loyalty_card');
        $this->addSql('ALTER TABLE loyalty_card ADD coupon VARCHAR(255) DEFAULT NULL');
    }
}
