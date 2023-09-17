<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230917144635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE calendar ADD CONSTRAINT FK_6EA9A1469D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6EA9A1469D86650F ON calendar (user_id_id)');
        $this->addSql('ALTER TABLE commentary ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentary ADD CONSTRAINT FK_1CAC12CA9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1CAC12CA9D86650F ON commentary (user_id_id)');
        $this->addSql('ALTER TABLE media ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C9D86650F ON media (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar DROP FOREIGN KEY FK_6EA9A1469D86650F');
        $this->addSql('DROP INDEX IDX_6EA9A1469D86650F ON calendar');
        $this->addSql('ALTER TABLE calendar DROP user_id_id');
        $this->addSql('ALTER TABLE commentary DROP FOREIGN KEY FK_1CAC12CA9D86650F');
        $this->addSql('DROP INDEX IDX_1CAC12CA9D86650F ON commentary');
        $this->addSql('ALTER TABLE commentary DROP user_id_id');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C9D86650F');
        $this->addSql('DROP INDEX IDX_6A2CA10C9D86650F ON media');
        $this->addSql('ALTER TABLE media DROP user_id_id');
    }
}
