<?php

use yii\db\Migration;

/**
 * Class m200925_091122_create_post_teble
 */
class m200925_091122_create_post_teble extends Migration
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
        echo "m200925_091122_create_post_teble cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'text'=>$this->string()->notNull(),
            'img'=>$this->string(),
        ]);
    }

    public function down()
    {
        echo "m200925_091122_create_post_teble cannot be reverted.\n";

        return false;
    }

}
