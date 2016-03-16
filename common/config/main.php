<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    # components
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    # end components

    # modules
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['admin']
        ]
    ],
    # end modules
];
