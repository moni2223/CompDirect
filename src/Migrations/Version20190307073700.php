<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190307073700 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE powersupply ADD pricedes VARCHAR(255) NOT NULL, ADD priceardes VARCHAR(255) NOT NULL, ADD priceemag VARCHAR(255) NOT NULL, ADD pricejar VARCHAR(255) NOT NULL, ADD urldes VARCHAR(255) NOT NULL, ADD urlardes VARCHAR(255) NOT NULL, ADD urlemag VARCHAR(255) NOT NULL, ADD urljar VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE powersupply DROP pricedes, DROP priceardes, DROP priceemag, DROP pricejar, DROP urldes, DROP urlardes, DROP urlemag, DROP urljar, DROP image');
    }
}
