<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::where('is_admin', 0)->get();
    }

    public function show($id)
    {
        return User::find($id);
    }
}
