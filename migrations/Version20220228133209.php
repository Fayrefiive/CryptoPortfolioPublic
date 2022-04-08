<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220228133209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE currency (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(32) NOT NULL, acronym VARCHAR(8) NOT NULL, symbol VARCHAR(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE platform (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(16) NOT NULL, image VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, primary_currency_id INT DEFAULT NULL, secondary_currency_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, pseudo VARCHAR(32) NOT NULL, register DATE NOT NULL, last_connexion DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6499CCBE1F7 (primary_currency_id), INDEX IDX_8D93D649C06F69F2 (secondary_currency_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_platform (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, platform_id INT DEFAULT NULL, public_key VARCHAR(255) DEFAULT NULL, secret_key VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, passphrase VARCHAR(255) DEFAULT NULL, vector VARCHAR(255) NOT NULL, INDEX IDX_D9DF34CBA76ED395 (user_id), INDEX IDX_D9DF34CBFFE6496F (platform_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499CCBE1F7 FOREIGN KEY (primary_currency_id) REFERENCES currency (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C06F69F2 FOREIGN KEY (secondary_currency_id) REFERENCES currency (id)');
        $this->addSql('ALTER TABLE user_platform ADD CONSTRAINT FK_D9DF34CBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_platform ADD CONSTRAINT FK_D9DF34CBFFE6496F FOREIGN KEY (platform_id) REFERENCES platform (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499CCBE1F7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C06F69F2');
        $this->addSql('ALTER TABLE user_platform DROP FOREIGN KEY FK_D9DF34CBFFE6496F');
        $this->addSql('ALTER TABLE user_platform DROP FOREIGN KEY FK_D9DF34CBA76ED395');
        $this->addSql('DROP TABLE currency');
        $this->addSql('DROP TABLE platform');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_platform');
    }
}
