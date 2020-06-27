<?php

namespace App\Http\Controllers;

use App\DataTables\PostDataTable;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Repositories\BlogRepository;
use App\Repositories\FotoRepository;
use App\Repositories\PostRepository;
use Flash;
use Illuminate\Http\Request;
use Response;
use SEO;

class PostController extends AppBaseController
{
    /** @var PostRepository */
    private $postRepository;
    private $fotoRepository;

    public function __construct(BlogRepository $blogRepo, PostRepository $postRepo, FotoRepository $fotoRepo)
    {
        $this->blogRepository = $blogRepo;
        $this->postRepository = $postRepo;
        $this->fotoRepository = $fotoRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     * @return Response
     */
    public function index(PostDataTable $dataTable)
    {
        $Blog = \App\Models\Blog::first();

        return $dataTable->render('posts.index', [
            'Blog' => $Blog,
        ]);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        $post = $this->postRepository->create($input);

        Flash::success('Post criado com sucesso.');

        return redirect(route('posts.edit', $post));
    }

    /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $input = \Request::all();

        if (\Request::has('data_publicacao')) {
            $data_publicacao = \Request::get('data_publicacao');
            $data_publicacao = \Carbon\Carbon::createFromFormat('d/m/Y', $data_publicacao);
            $input['data_publicacao'] = $data_publicacao;
        }

        $post = $this->postRepository->update($input, $id);

        if ($request->file) {
            if ($post->fotoCapa) {
                $post->fotoCapa->delete();
            }

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $post->fotoCapa()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = 'blog_'.time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Post atualizado com sucesso.');

        return redirect(route('posts.edit', $post));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * undocumented function.
     *
     * @return void
     */
    public function interna($slug)
    {
        $Post = $this->postRepository->findByField('slug', $slug)->first();
        $Blog = $this->blogRepository->first();

        if (empty($Post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        SEO::setTitle($Post->titulo);
        SEO::addImages($Post->capa_url);
        SEO::setDescription($Post->preview(130).'...');
        SEO::opengraph()->setUrl(\URL::to('/blog/'.$Post->slug));
        SEO::setCanonical(\URL::to('/blog/'.$Post->slug));
        SEO::opengraph()->addProperty('type', 'articles');

        return view('pages.blog-interna')
            ->with('Post', $Post)
            ->with('Blog', $Blog);
    }

    /**
     * undocumented function.
     *
     * @return void
     */
    public function trocaListagem($id)
    {
        $post = $this->postRepository->find($id);
        $post->status = ($post->status == Post::STATUS_PUBLICADO)
            ? Post::STATUS_EM_REVISAO
            : Post::STATUS_PUBLICADO;

        $post->save();

        Flash::success('Post atualizado com sucesso');

        return redirect(route('posts.index', $post));
    }
}
