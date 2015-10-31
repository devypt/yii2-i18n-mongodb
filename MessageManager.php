<?php
/**
 * Created by PhpStorm.
 * User: devypt
 * Date: 2015/10/31
 * Time: 10:12
 */

namespace devypt\i18n;

class MessageManager
{
    public static function setTranslation($category, $message, $translation, $language, $collection = 'message_translation')
    {
        if (is_string($collection)) {
            $collection = \Yii::$app->mongodb->getCollection($collection);
        }
        return $collection->update(['category' => $category, 'message' => $message, 'language' => $language], ['translation' => $translation], ['upsert' => true]) === 1 ?: false;
    }

}
