<?php
/**
 *
 * @copyright(c) 2019
 * @created by  shelwin
 * @package confhub-sdk
 * @version $Id: confhub.php 2019-07-02 16:25 $
 */

return [
    'url' => env('CONFHUB_SERVICE_HOST', ''),
    'timeout' => 3,
    'log' => [
        'file' => [
            'level' => 'error',
            'maxFiles' => 15,
        ],
    ]
];