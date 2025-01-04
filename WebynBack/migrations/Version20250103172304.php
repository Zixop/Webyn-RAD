<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250103172304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create Databse for Traffic';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("CREATE TABLE IF NOT EXISTS traffic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, page_url VARCHAR(255) NOT NULL, traffic VARCHAR(255) NOT NULL)");
        $this->addSql("INSERT INTO traffic (id, page_url, traffic) VALUES (1, '/home', 125), (2, '/about', 80), (3, '/products', 300), (4, '/contact', 45), (5, '/blog', 450)");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE traffic');
    }
}
