<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "navigation_work".
 *
 * @property int $id
 * @property int|null $direction_id
 * @property string|null $link
 * @property string|null $name
 *
 * @property NavigationDirection $direction
 */
class NavigationWork extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'navigation_work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['direction_id'], 'integer'],
            [['link', 'name'], 'string', 'max' => 255],
            [['direction_id'], 'exist', 'skipOnError' => true, 'targetClass' => NavigationDirection::className(), 'targetAttribute' => ['direction_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'direction_id' => 'Direction ID',
            'link' => 'Link',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Direction]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirection()
    {
        return $this->hasOne(NavigationDirection::className(), ['id' => 'direction_id']);
    }
}
