<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'http://127.0.0.1:8000/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'http://127.0.0.1:8000/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'http://127.0.0.1:8000/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => 'Your client ID',
            'client_secret' => 'Your Secret ID',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
