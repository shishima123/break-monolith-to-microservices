<?php

namespace App\Services;

use Illuminate\Http\Client\Response;

class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = env('USER_MS') . '/api';
    }
}
