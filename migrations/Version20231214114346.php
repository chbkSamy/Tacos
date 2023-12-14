<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231214114346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dessert ADD image LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE drink ADD image LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE sauce ADD image LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE tacos ADD image LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE viande CHANGE image image LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dessert DROP image');
        $this->addSql('ALTER TABLE drink DROP image');
        $this->addSql('ALTER TABLE sauce DROP image');
        $this->addSql('ALTER TABLE tacos DROP image');
        $this->addSql('ALTER TABLE viande CHANGE image image VARCHAR(255) NOT NULL');
    }
}
