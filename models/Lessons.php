<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lessons".
 *
 * @property string $id
 * @property string $name
 */
class Lessons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lessons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
        ];
    }


    public function getCategory(){
        return $this->hasMany(Category::className(), ['lesson_id' => 'id']);
    }
}
