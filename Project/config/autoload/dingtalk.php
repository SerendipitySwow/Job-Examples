<?php
/**
 * This file is part of Swow-Cloud/Job
 * @license  https://github.com/serendipity-swow/serendipity-job/blob/main/LICENSE
 */

declare(strict_types=1);

return [
    'default' => [
        'enabled' => env('DING_ENABLED', true),
        'token' => env('DING_TOKEN', ''),
        'ssl_verify' => env('DING_SSL_VERIFY', true),
        'secret' => env('DING_SECRET', true),
        'options' => [
            'timeout' => env('DING_TIME_OUT', 2.0),
        ],
    ],
];
