<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Shishima\UserService\UserService;

class LinkController extends Controller
{
    public UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show($code)
    {
        $link = Link::with('products')->where('code', $code)->first();
        $link['user'] = $this->userService->get("users/{$link->user_id}");
        return $link;
    }
}
