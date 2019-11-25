<?php

use hzhihua\dump\Migration;

/**
 * Class m123456_654321_1_tableData_user
 * @property \yii\db\Transaction $_transaction
 * @Github https://github.com/Hzhihua
 */
class m123456_654321_1_tableData_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->_transaction = $this->getDb()->beginTransaction();
        $this->batchInsert('{{%user}}', 
            ['id', 'username', 'nama', 'alamat', 'telfon', 'jabatan', 'foto', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at', 'verification_token'],
            [
                [1, 'kholiqul', 'Much Kholiqul Rosidin', 'jl. hayamwuruk', '+6282244007536', 1, 'kholiqul', 'b7gZbk2SIwH4vFD8Syc4BgK3vYVxutkn', '$2y$13$q3/pCdFISVXDJ0y7M15K7O3g354/F/jMH6vBFJLNFi86LRaeyoD66', null, 'kholiqcaem@gmail.com', 10, 1574652735, 1574652735, 'Es-x7J0s45FiTgFy9EcGVJ3tqp2l5_lF_1574652735'],
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
