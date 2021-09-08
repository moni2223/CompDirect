<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190226195235 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ram (id INT AUTO_INCREMENT NOT NULL, memory VARCHAR(80) NOT NULL, memoryfordb VARCHAR(80) NOT NULL, pack VARCHAR(100) NOT NULL, type VARCHAR(50) NOT NULL, speed VARCHAR(500) NOT NULL, multi VARCHAR(100) NOT NULL, cas VARCHAR(100) NOT NULL, cooling VARCHAR(100) NOT NULL, voltage VARCHAR(100) NOT NULL, pricedes NUMERIC(5, 2) NOT NULL, priceardes NUMERIC(5, 2) NOT NULL, priceemag NUMERIC(5, 2) NOT NULL, pricejar NUMERIC(5, 2) NOT NULL, urldes VARCHAR(255) NOT NULL, urlardes VARCHAR(255) NOT NULL, urlemag VARCHAR(255) NOT NULL, urljar VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ram');
    }
}
