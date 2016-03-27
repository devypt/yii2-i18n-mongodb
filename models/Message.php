<?php

namespace devypt\i18n\models;

use Yii;

/**
 * This is the model class for collection "message".
 *
 * @property \MongoId|string $_id
 */
class Message extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['jobs', 'message'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
          '_id',
          'message',
          'category',
          'language',
          'translation',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          [['translation', 'language', 'category', 'message'], 'safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          '_id' => 'ID',
        ];
    }
}
