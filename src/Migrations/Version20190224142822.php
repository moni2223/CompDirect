<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190224142822 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE motherboards (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, socket VARCHAR(255) NOT NULL, cpusocket VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, typememory VARCHAR(255) NOT NULL, integrated VARCHAR(255) NOT NULL, dvi VARCHAR(255) NOT NULL, hdmi VARCHAR(255) NOT NULL, display_port VARCHAR(255) NOT NULL, price NUMERIC(5, 2) NOT NULL, priceardes NUMERIC(5, 2) NOT NULL, priceemag NUMERIC(5, 2) NOT NULL, pricejar NUMERIC(5, 2) NOT NULL, urldes VARCHAR(255) NOT NULL, urlardes VARCHAR(255) NOT NULL, urlemag VARCHAR(255) NOT NULL, urljar VARCHAR(255) NOT NULL, urlimage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE motherboards');
    }
}
