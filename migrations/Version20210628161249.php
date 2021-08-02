<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628161249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student ADD idclass_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF3340D5431D FOREIGN KEY (idclass_id) REFERENCES classroom (id)');
        $this->addSql('CREATE INDEX IDX_B723AF3340D5431D ON student (idclass_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF3340D5431D');
        $this->addSql('DROP INDEX IDX_B723AF3340D5431D ON student');
        $this->addSql('ALTER TABLE student DROP idclass_id');
    }
}
