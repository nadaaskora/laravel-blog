<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return UserResource::collection($users);
    }

    public function show($user)
    {
        $user=User::find($user);
        dd($user);
        return new UserResource($user);
    }
}
