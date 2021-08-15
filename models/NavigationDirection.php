<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "navigation_direction".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property NavigationWork[] $navigationWorks
 */
class NavigationDirection extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'navigation_direction';
    }


    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[NavigationWorks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNavigationWorks()
    {
        return $this->hasMany(NavigationWork::className(), ['direction_id' => 'id']);
    }
}
