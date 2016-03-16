<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  /**
   * Display login page.
   *
   * @return login view.
   */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Authenticates user and then logs in the user
     *
     * @param  Request $request
     */
    public function postLogin(Request $request)
    {
        // Validate the information given
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (! Auth::attempt($request->only(['email', 'password']))) {
            alert()->error('Could not log you in with those credentials', 'Sorry');
            return redirect()->route('login');
        }

        return redirect()->route('home');
    }
    /**
     * Display register page.
     *
     * @return register view.
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Add user information to the Database
     *
     * @param  Request $request
     *
     * @return Redirect to homepage
     */
    public function postRegister(Request $request)
    {
        // Validate information provided
        $this->validate($request, [
            'email'    => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);

        // create the new user in the database once validation has occured
        User::create([
            'email'    => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password'))
        ]);

        // Provide a sweet alert pop up
        alert()->success('Your account has been created and you can now log in', 'Success');

        return redirect()->route('home');
    }
}
