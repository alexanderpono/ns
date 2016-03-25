<?php

class m160325_204007_create_actor extends CDbMigration
{
	public function up()
	{
	   $this->createTable('actor', array(
      	       'actor_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT',
      	       'first_name' => 'varchar(45) NOT NULL',
      	       'last_name' => 'varchar(45) NOT NULL',
      	       'last_update' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
      	       'PRIMARY KEY  (actor_id)',
      	       'KEY `idx_actor_last_name` (`last_name`)'
      	   ),
      	   'ENGINE=InnoDB DEFAULT CHARSET=utf8'
	   );
	}

	public function down()
	{
       //$transaction = $this->getDbConnection()->beginTransaction();
	   $this->dropTable('actor');
       //$transaction->commit();
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