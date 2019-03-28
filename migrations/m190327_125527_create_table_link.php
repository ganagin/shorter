<?php

use yii\db\Migration;

/**
 * Class m190327_125527_create_table_link
 */
class m190327_125527_create_table_link extends Migration
{
    public function up()
    {
		$this->createTable('link', [
			'id' => $this->primaryKey(),
			'short' => $this->char(8)->notNull(),
			'long' => $this->text()->notNull(),
		]);

		$this->createIndex('idx-link-short', 'link', 'short', true);
    }

    public function down()
    {
        $this->dropTable('link');
    }
}
