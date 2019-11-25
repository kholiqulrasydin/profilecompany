<?php

use hzhihua\dump\Migration;

/**
 * Class m123456_654321_1_tableData_jabatan
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m123456_654321_1_tableData_jabatan extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->_transaction = $this->getDb()->beginTransaction();
        $this->batchInsert('{{%jabatan}}', 
            ['id', 'nama', 'gaji'],
            [
                [1, 'superadmin', 30000000],
                [2, 'Chief Executive Officer', 500000],
            ]
        );
        $this->_transaction->commit();

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
        $this->_transaction->rollBack();

    }
}
