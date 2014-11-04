<?php
/**
 * Created by PhpStorm.
 * User: 俊杰
 * Date: 2014/11/4
 * Time: 11:26
 */

namespace iit\i18n;


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