<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Searching for friends
     *
     * @return results view with the results
     */
    public function getResults(Request $request)
    {
        $query = $request->input('query');

        if (! $query) {
            return redirect()->route('home');
        }

        $users = User::where('username', 'LIKE', "%{$query}%")
                      ->orWhere(
                          DB::raw(
                              "CONCAT(first_name,' ',last_name)"
                          ),
                          'LIKE',
                          "%{$query}%"
                      )
                      ->get();

        return view('search.results')->with('users', $users);
    }
}
