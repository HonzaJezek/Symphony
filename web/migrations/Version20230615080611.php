<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230615080611 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE jezek (id INT AUTO_INCREMENT NOT NULL, cena_id INT DEFAULT NULL, znak_id INT DEFAULT NULL, vuz_id INT DEFAULT NULL, jmeno VARCHAR(255) DEFAULT NULL, poznavacicislo VARCHAR(255) DEFAULT NULL, heslo VARCHAR(255) DEFAULT NULL, datum VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, INDEX IDX_82D4557443935287 (cena_id), INDEX IDX_82D4557436FF0CEC (znak_id), INDEX IDX_82D45574C0097C1A (vuz_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test1 (id INT AUTO_INCREMENT NOT NULL, test1 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test2 (id INT AUTO_INCREMENT NOT NULL, test2 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test3 (id INT AUTO_INCREMENT NOT NULL, test3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE jezek ADD CONSTRAINT FK_82D4557443935287 FOREIGN KEY (cena_id) REFERENCES test1 (id)');
        $this->addSql('ALTER TABLE jezek ADD CONSTRAINT FK_82D4557436FF0CEC FOREIGN KEY (znak_id) REFERENCES test2 (id)');
        $this->addSql('ALTER TABLE jezek ADD CONSTRAINT FK_82D45574C0097C1A FOREIGN KEY (vuz_id) REFERENCES test3 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jezek DROP FOREIGN KEY FK_82D4557443935287');
        $this->addSql('ALTER TABLE jezek DROP FOREIGN KEY FK_82D4557436FF0CEC');
        $this->addSql('ALTER TABLE jezek DROP FOREIGN KEY FK_82D45574C0097C1A');
        $this->addSql('DROP TABLE jezek');
        $this->addSql('DROP TABLE test1');
        $this->addSql('DROP TABLE test2');
        $this->addSql('DROP TABLE test3');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
