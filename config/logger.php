<?php

return [
    'default' => env('LOGGER_TYPE', 'file'),
    'email' => env('LOGGER_EMAIL', 'test@test.com'),
    'types' => [
        'email',
        'file',
        'database',
    ],
];
