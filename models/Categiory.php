<?php


namespace app\models;

use yii\db\ActiveRecord;

class Categiory extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getGategories() {
        return Categiory::find()->asArray()->all();
    }
}