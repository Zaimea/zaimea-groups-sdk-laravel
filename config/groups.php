<?php

use Zaimea\GroupsSDK\GroupsServiceProvider;

return [
    'credentials' => [
        'key'    => env('ZAIMEA_GROUPS_ACCESS_KEY_ID', ''),
        'secret' => env('ZAIMEA_GROUPS_SECRET_ACCESS_KEY', ''),
    ],
    'version' => GroupsServiceProvider::VERSION,
];
