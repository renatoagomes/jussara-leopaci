<?php

namespace App\Http\Controllers;

use Flash;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\FotoRepository;

/**
 * Class: BlogController - Serve a listagem de posts e a pagina interna de 1 Post.
 *
 * @see Controller
 */
class BlogController extends Controller
{
    private $blogRepository;
    private $fotoRepository;

    /**
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository, FotoRepository $fotoRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->fotoRepository = $fotoRepository;
    }

    /**
     * Serve a página /blog com a listagem das postagens.
     *
     * @return void
     */
    public function index(Request $param)
    {
        $Blog = $this->blogRepository->first();

        return view('pages.blog')->with('Blog', $Blog);
    }

    /**
     * Serve a página interna de uma postagem.
     *
     * @return void
     */
    public function show(Request $param)
    {
        $Blog = $this->blogRepository->first();

        dd($Blog);

        return view('pages.blog-interna')->with('Blog', $Blog);
    }

    /**
     * undocumented function.
     *
     * @return void
     */
    public function getTrocaFotoCapa()
    {
        $Blog = $this->blogRepository->first();

        return view('admin.blog.index')->with('Blog', $Blog);
    }

    /**
     * Metodo para receber o post de trocar a foto de capa.
     *
     * @return void
     */
    public function postTrocaFotoCapa(Request $request)
    {
        $Blog = $this->blogRepository->first();

        if ($request->file) {
            if ($Blog->fotoCapa()->first()) {
                $Blog->fotoCapa()->first()->delete();
            }

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $Blog->fotoCapa()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = 'jussara_blog_'.time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto de fundo atualizada com sucesso.');

        return redirect()->back();
    }
}
