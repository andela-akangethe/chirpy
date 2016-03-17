<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\user;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Get user profile
     * @param  user ID
     * @return user profile
     */
    public function getProfile($id)
    {
        $user = User::where('id', $id)->first();

        if (! $user) {
            abort(404);
        }

        return view('profile.index')
                ->with('user', $user);
    }

    /**
     * Get user profile edit page
     * @return user profile edit view
     */
    public function getEditProfile()
    {
        return view('profile.edit');
    }

    /**
     * Update user information
     * @param  Request $request
     * @return redirect to edit profile view
     */
    public function postEditProfile(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'alpha|max:50',
            'last_name'  => 'alpha|max:50',
            'location'   => 'max:20'
        ]);

        Auth::user()->update([
            'first_name' => $request->input('first_name'),
            'last_name'  => $request->input('last_name'),
            'location'   => $request->input('location')
        ]);

        alert()->success('Your profile has been updated', 'Success');

        return redirect()->route('editProfile');
    }
}
