<?php

class m160325_225447_create_film_actor extends CDbMigration
{
	public function up()
	{
       $this->createTable('film_actor', array(
               'actor_id' => 'smallint(5) unsigned NOT NULL',
               'film_id' => 'smallint(5) unsigned NOT NULL',
               'last_update' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                "PRIMARY KEY (`actor_id`,`film_id`)",
                "KEY `idx_fk_film_id` (`film_id`)"
           ),
           'ENGINE=InnoDB DEFAULT CHARSET=utf8'
       );
	}
	
	public function down()
	{
        $this->dropTable('film_actor');
	}
}