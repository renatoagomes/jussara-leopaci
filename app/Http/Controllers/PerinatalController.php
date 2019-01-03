<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class: PerinatalController - Serve a pagina /perinatal
 *
 * @see Controller
 */
class PerinatalController extends Controller
{
    /**
     * Serve a página /perinatal
     *
     * @return void
     */
    public function index(Request $param)
    {
        return view('pages.perinatal');
    }
    
}
