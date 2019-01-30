<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '1016420831874792',
            'client_secret' => '6dd67ffe614a6ce290ed1bc921d2f080',
            'redirect_uri' => 'http://127.0.0.1:8000/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '597336113882-i0a9ksspifla03uo9k01fnrtj1b00edn.apps.googleusercontent.com',
            'client_secret' => 'JF_IcptzSZY8PmXx_b61umur',
            'redirect_uri' => 'http://127.0.0.1:8000/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => '4d8dedd904d1ed42dfa9',
            'client_secret' => 'cd7d0455cddc42bd1f17454972c8479be5916311',
            'redirect_uri' => 'http://127.0.0.1:8000/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '4d8dedd904d1ed42dfa9',
            'client_secret' => 'cd7d0455cddc42bd1f17454972c8479be5916311',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
