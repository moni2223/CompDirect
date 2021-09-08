<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190227161609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE motherboards CHANGE price price VARCHAR(80) NOT NULL, CHANGE priceardes priceardes VARCHAR(80) NOT NULL, CHANGE priceemag priceemag VARCHAR(80) NOT NULL, CHANGE pricejar pricejar VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE ram CHANGE pricedes pricedes VARCHAR(80) NOT NULL, CHANGE priceardes priceardes VARCHAR(80) NOT NULL, CHANGE priceemag priceemag VARCHAR(80) NOT NULL, CHANGE pricejar pricejar VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE video_cards CHANGE pricedes pricedes VARCHAR(80) NOT NULL, CHANGE priceardes priceardes VARCHAR(80) NOT NULL, CHANGE priceemag priceemag VARCHAR(80) NOT NULL, CHANGE pricejar pricejar VARCHAR(80) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE motherboards CHANGE price price NUMERIC(5, 2) NOT NULL, CHANGE priceardes priceardes NUMERIC(5, 2) NOT NULL, CHANGE priceemag priceemag NUMERIC(5, 2) NOT NULL, CHANGE pricejar pricejar NUMERIC(5, 2) NOT NULL');
        $this->addSql('ALTER TABLE ram CHANGE pricedes pricedes NUMERIC(5, 2) NOT NULL, CHANGE priceardes priceardes NUMERIC(5, 2) NOT NULL, CHANGE priceemag priceemag NUMERIC(5, 2) NOT NULL, CHANGE pricejar pricejar NUMERIC(5, 2) NOT NULL');
        $this->addSql('ALTER TABLE video_cards CHANGE pricedes pricedes NUMERIC(5, 2) NOT NULL, CHANGE priceardes priceardes NUMERIC(5, 2) NOT NULL, CHANGE priceemag priceemag NUMERIC(5, 2) NOT NULL, CHANGE pricejar pricejar NUMERIC(5, 2) NOT NULL');
    }
}
