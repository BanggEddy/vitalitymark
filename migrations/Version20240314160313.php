<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240314160313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD idproducts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2AA4BF106 FOREIGN KEY (idproducts_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2AA4BF106 ON panier (idproducts_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2AA4BF106');
        $this->addSql('DROP INDEX IDX_24CC0DF2AA4BF106 ON panier');
        $this->addSql('ALTER TABLE panier DROP idproducts_id');
    }
}
