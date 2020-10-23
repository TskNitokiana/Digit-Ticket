<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201013071818 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA712469DE2');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA72D9E6603');
        $this->addSql('DROP INDEX UNIQ_3BAE0AA72D9E6603 ON event');
        $this->addSql('DROP INDEX UNIQ_3BAE0AA712469DE2 ON event');
        $this->addSql('ALTER TABLE event DROP typeevent_id, DROP category_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event ADD typeevent_id INT DEFAULT NULL, ADD category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA72D9E6603 FOREIGN KEY (typeevent_id) REFERENCES type_event (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BAE0AA72D9E6603 ON event (typeevent_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BAE0AA712469DE2 ON event (category_id)');
    }
}
