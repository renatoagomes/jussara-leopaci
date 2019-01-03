<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class: BlogController - Serve a listagem de posts e a pagina interna de 1 Post
 *
 * @see Controller
 */
class BlogController extends Controller
{
    /**
     * Serve a página /blog com a listagem das postagens
     *
     * @return void
     */
    public function index(Request $param)
    {
        return view('pages.blog');
    }

    /**
     * Serve a página interna de uma postagem
     *
     * @return void
     */
    public function show(Request $param)
    {
        return view('pages.blog-interna');
    }
    
}
