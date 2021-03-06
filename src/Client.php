<?php

namespace AGSystems\Toggl\REST;

use AGSystems\REST\AbstractClient;

class Client extends AbstractClient
{
    protected $accessToken;

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    protected function clientOptions()
    {
        return [
            'base_uri' => 'https://www.toggl.com/api/v8/',
            'auth' => [
                $this->accessToken,
                'api_token',
            ],
        ];
    }
}
