<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shishima\UserService\UserService;

class AmbassadorController extends Controller
{
    public UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->get('users');
    }
}
