<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int $idate
 * @property string $title
 * @property string $announce
 * @property string $content
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idate'], 'integer'],
            [['announce', 'content'], 'string'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idate' => 'Дата публикации',
            'title' => '',
            'announce' => '',
            'content' => '',
        ];
    }
}
