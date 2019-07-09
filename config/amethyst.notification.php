<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'notification' => [
            'table'      => 'notifications',
            'comment'    => 'Notification',
            'model'      => Amethyst\Models\Notification::class,
            'schema'     => Amethyst\Schemas\NotificationSchema::class,
            'repository' => Amethyst\Repositories\NotificationRepository::class,
            'serializer' => Amethyst\Serializers\NotificationSerializer::class,
            'validator'  => Amethyst\Validators\NotificationValidator::class,
            'authorizer' => Amethyst\Authorizers\NotificationAuthorizer::class,
            'faker'      => Amethyst\Fakers\NotificationFaker::class,
            'manager'    => Amethyst\Managers\NotificationManager::class,
            'user'       => App\Models\User::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'notification' => [
                'enabled'    => true,
                'controller' => Amethyst\Http\Controllers\Admin\NotificationsController::class,
                'router'     => [
                    'as'     => 'notification.',
                    'prefix' => '/notifications',
                ],
            ],
        ],
        'user' => [
            'notification' => [
                'enabled'    => true,
                'controller' => Amethyst\Http\Controllers\User\NotificationsController::class,
                'router'     => [
                    'as'     => 'notification.',
                    'prefix' => '/notifications',
                ],
            ],
        ],
    ],
];
