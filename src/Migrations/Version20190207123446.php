<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190207123446 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE processors (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(500) NOT NULL, type VARCHAR(500) NOT NULL, cores INT NOT NULL, socket VARCHAR(80) NOT NULL, clockrate VARCHAR(80) NOT NULL, cache VARCHAR(80) NOT NULL, pricedes NUMERIC(5, 2) NOT NULL, priceardes NUMERIC(5, 2) NOT NULL, priceemag NUMERIC(5, 2) NOT NULL, pricejar NUMERIC(5, 2) DEFAULT NULL, urldes VARCHAR(600) NOT NULL, urlardes VARCHAR(600) NOT NULL, urljar VARCHAR(600) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE processors');
    }
}
