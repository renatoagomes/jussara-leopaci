<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class: WelcomeController - Serve a Homepage.
 *
 * @see Controller
 */
class WelcomeController extends Controller
{
    /**
     * Serve a homepage.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $Homepage = \App\Models\Homepage::first();
        return view('pages.homepage')->with('Homepage', $Homepage);
    }
}
