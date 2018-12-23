<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Entities\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->get();
        $params = [
            'users' => $users
        ];
        return view('admin.users.index', $params);
    }
}
