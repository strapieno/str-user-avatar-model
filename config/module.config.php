<?php
return [
    'imgman_mongodb' => [
        'Mongo\Db\Image' => [
            'database' => 'strapieno-image',
        ],
    ],
    'imgman_adapter_mongo' => [
        'ImgMan\Mongo\UserAvatar' => [
            'collection' => 'user_avatar',
            'database' => 'Mongo\Db\Image',
            'identifier' => 'identifier'
        ],
    ],
    'imgman_services' => [
        'ImgMan\Service\UserAvatar' => [
            'adapter' => 'ImgMan\Adapter\Imagick',
            'storage' => 'ImgMan\Mongo\UserAvatar',
            'helper_manager' => 'ImgMan\PluginManager',
            'renditions' => [
                'thumb' => [
                    'fitOut' => [
                        'width' => 400,
                        'height' => 400
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ],
                ],
                'normal' => [
                    'fitOut' => [
                        'width' => 30,
                        'height' => 30,
                        'allowUpsample' => true
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ]
                ]
            ]
        ]
    ],
];
