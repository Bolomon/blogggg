<?php

use yii\db\Migration;

/**
 * Class m200925_091051_myblog
 */
class m200925_091051_myblog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200925_091051_myblog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200925_091051_myblog cannot be reverted.\n";

        return false;
    }
    */
}
