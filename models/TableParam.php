<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table_param".
 *
 * @property string $id
 * @property string $name
 * @property int $price
 * @property int $time
 */
class TableParam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table_param';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'time'], 'required'],
            [['price', 'time'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'time' => 'Time',
        ];
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
