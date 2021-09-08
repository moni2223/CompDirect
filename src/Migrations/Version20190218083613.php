<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190218083613 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE video_cards (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(500) NOT NULL, type VARCHAR(400) NOT NULL, chipset VARCHAR(500) NOT NULL, cooling VARCHAR(50) NOT NULL, coolers VARCHAR(50) NOT NULL, gpuspeed VARCHAR(500) NOT NULL, gpumemory VARCHAR(500) NOT NULL, memory VARCHAR(500) NOT NULL, output VARCHAR(500) NOT NULL, urldes VARCHAR(2000) NOT NULL, urlardes VARCHAR(2000) NOT NULL, urlemag VARCHAR(2000) NOT NULL, urljar VARCHAR(2000) NOT NULL, pricedes NUMERIC(5, 2) NOT NULL, priceardes NUMERIC(5, 2) NOT NULL, priceemag NUMERIC(5, 2) NOT NULL, pricejar NUMERIC(5, 2) NOT NULL, imageurl VARCHAR(2000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE video_cards');
    }
}
