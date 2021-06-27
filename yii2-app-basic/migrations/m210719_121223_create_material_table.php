<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%material}}`.
 */
class m210719_121223_create_material_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%material}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'author' => $this->string(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
        $this->addForeignKey(
            'fk-material-category_id',
            'material',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-material-type_id',
            'material',
            'type_id',
            'type',
            'id',
            'CASCADE'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%material}}');
    }
}
