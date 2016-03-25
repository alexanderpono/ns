<?php

class m160325_221829_create_film extends CDbMigration
{
	public function up()
	{
       $this->createTable('film', array(
               'film_id smallint(5) unsigned NOT NULL AUTO_INCREMENT',
               'title' => 'varchar(255) NOT NULL',
               'description' => 'text',
               'release_year' => 'year(4) DEFAULT NULL',
               'language_id' => 'tinyint(3) unsigned NOT NULL',
               'original_language_id' => 'tinyint(3) unsigned DEFAULT NULL',
               'rental_duration' => "tinyint(3) unsigned NOT NULL DEFAULT '3'",
               'rental_rate' => "decimal(4,2) NOT NULL DEFAULT '4.99'",
               'length' => 'smallint(5) unsigned DEFAULT NULL',
               'replacement_cost' => "decimal(5,2) NOT NULL DEFAULT '19.99'",
               'rating' => "enum('G','PG','PG-13','R','NC-17') DEFAULT 'G'",
               'special_features' => "set('Trailers','Commentaries','Deleted Scenes','Behind the Scenes') DEFAULT NULL",
               'last_update' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                "PRIMARY KEY (`film_id`)",
                "KEY `idx_title` (`title`)",
                "KEY `idx_fk_language_id` (`language_id`)",
                "KEY `idx_fk_original_language_id` (`original_language_id`)"
           ),
           'ENGINE=InnoDB DEFAULT CHARSET=utf8'
       );
	}

	public function down()
	{
       $this->dropTable('film');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}