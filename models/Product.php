<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $count
 * @property string $information
 * @property int $price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count', 'information', 'price', 'subject'], 'required'],
            [['count', 'price'], 'integer'],
            [['information'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'count' => 'Количество мест',
            'information' => 'Информация',
            'price' => 'Цена',
            'subject' => 'Заголовок',
        ];
    }
}
