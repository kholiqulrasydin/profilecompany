<?php

use hzhihua\dump\Migration;

/**
 * Class m123456_654321_0_table_jabatan
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m123456_654321_0_table_jabatan extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->runSuccess['createTable'] = $this->createTable('{{%jabatan}}', [
            'id' => $this->integer(11)->notNull(),
            'nama' => $this->string(255)->notNull(),
            'gaji' => $this->integer(11)->notNull(),
        ], $this->tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        foreach ($this->runSuccess as $keyName => $value) {
            if ('createTable' === $keyName) {
                $this->dropTable('{{%jabatan}}');
            } elseif ('addTableComment' === $keyName) {
                $this->dropCommentFromTable('{{%jabatan}}');
            } else {
                throw new \yii\db\Exception('only support "dropTable" and "dropCommentFromTable"');
            }
        }
    }
}
