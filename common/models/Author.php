<?php

namespace common\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "authors".
 *
 * @property integer $id
 * @property string $name
 */
class Author extends \yii\db\ActiveRecord
{
    public $test;
    /**
     * Получаем количество книг по автору
     */
    public function getCountBooks(){
        $q = new \yii\db\Query();
        $res = $q->select('count(*) as `c`')->from('books')->where('author_id=:id',[':id'=>$this->id])->one();

        return $res['c'];
    }

    public static function tableName()
    {
        return 'authors';
    }

    public function fields()
    {
    
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя автора'
        ];
    }
}
