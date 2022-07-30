<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409133805 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO dtb_page(page_name, url, file_name, edit_type, create_date, update_date, discriminator_type) values ('Chi tiết tin tức', 'news_detail', 'News/detail', 2, now(), now(), 'page') ");
    }

    public function down(Schema $schema) : void
    {
       
    }
}
