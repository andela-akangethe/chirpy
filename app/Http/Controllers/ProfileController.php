<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function getProfile($id)
    {
        $user = User::where('id', $id)->first();

        if (! $user) {
            abort(404);
        }

        return view('profile.index')
                ->with('user', $user);
    }
}
