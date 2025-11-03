<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251019193750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB13256915B');
        $this->addSql('DROP INDEX IDX_B50A2CB13256915B ON competition');
        $this->addSql('ALTER TABLE competition CHANGE ref joueur_id INT NOT NULL');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1A9E2D76C FOREIGN KEY (joueur_id) REFERENCES joueur (id)');
        $this->addSql('CREATE INDEX IDX_B50A2CB1A9E2D76C ON competition (joueur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1A9E2D76C');
        $this->addSql('DROP INDEX IDX_B50A2CB1A9E2D76C ON competition');
        $this->addSql('ALTER TABLE competition CHANGE joueur_id ref INT NOT NULL');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB13256915B FOREIGN KEY (ref) REFERENCES joueur (id)');
        $this->addSql('CREATE INDEX IDX_B50A2CB13256915B ON competition (ref)');
    }
}
