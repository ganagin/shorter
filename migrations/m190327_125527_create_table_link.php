<?php

use yii\db\Migration;

/**
 * Class m190327_125527_create_table_link
 */
class m190327_125527_create_table_link extends Migration
{
    public function up()
    {
		$this->execute('
			CREATE TABLE `link` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`short` char(8) NOT NULL,
				`long` text NOT NULL,
				PRIMARY KEY (`id`),
				INDEX (`short`),
				UNIQUE KEY (`short`) 
			) ENGINE=InnoDB DEFAULT CHARSET=utf8
		');
    }

    public function down()
    {
        $this->dropTable('link');
    }
}
