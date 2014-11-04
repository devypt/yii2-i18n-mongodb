基本monogodb开发的Yii国际化数据源
=================================
##安装方法
在项目的`composer.json`的`require`数组内加入`"iit/yii2-i18n-mongodb": "*"`

```php

    "require": {
        "iit/yii2-i18n-mongodb": "*"
    }

```

##使用方法
在项目的配置文件里把对应的`translations`分类的数据源指向`\iit\i18n\MongoDbMessageSource`，下面是部分例子

```php

'i18n' => [
    'translations' => [
        'app' => [
            'class' => 'iit\i18n\MongoDbMessageSource'
        ],
    ],
],

```