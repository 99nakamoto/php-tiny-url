<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tinyurl".
 *
 * @property string $short
 * @property string $full
 * @property string $created_time
 * @property string $last_access
 */
class Tinyurl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tinyurl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short', 'full', 'created_time', 'last_access'], 'required'],
            [['created_time', 'last_access'], 'safe'],
            [['short'], 'string', 'max' => 5],
            [['full'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'short' => 'Short Url',
            'full' => 'Full Url',
            'created_time' => 'Created Time',
            'last_access' => 'Last Access Time',
        ];
    }
}
