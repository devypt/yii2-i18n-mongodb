Yii2 I18N Mongodb
=================================

This packages is based on "iit/yii2-i18n-mongodb" package

Installation
`composer require "devypt/yii2-i18n-mongodb": "*"`

```php

    "require": {
        "devypt/yii2-i18n-mongodb": "*"
    }

```

##configuration

```php

'i18n' => [
    'translations' => [
        'app' => [
            'class' => 'devypt\i18n\MongoDbMessageSource'
        ],
    ],
],

```


```php

\devypt\i18n\MessageManager::setTranslation('categroy', 'sourceMessage', 'translationMessage', 'language');

```
