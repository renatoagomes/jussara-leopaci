<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReferenciaPostRequest;
use App\Http\Requests\UpdateReferenciaPostRequest;
use App\Repositories\ReferenciaPostRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReferenciaPostController extends AppBaseController
{
    /** @var ReferenciaPostRepository */
    private $referenciaPostRepository;

    public function __construct(ReferenciaPostRepository $referenciaPostRepo)
    {
        $this->referenciaPostRepository = $referenciaPostRepo;
    }

    /**
     * Display a listing of the ReferenciaPost.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->referenciaPostRepository->pushCriteria(new RequestCriteria($request));
        $referenciaPosts = $this->referenciaPostRepository->all();

        return view('referencia_posts.index')
            ->with('referenciaPosts', $referenciaPosts);
    }

    /**
     * Show the form for creating a new ReferenciaPost.
     *
     * @return Response
     */
    public function create()
    {
        return view('referencia_posts.create');
    }

    /**
     * Store a newly created ReferenciaPost in storage.
     *
     * @param CreateReferenciaPostRequest $request
     *
     * @return Response
     */
    public function store(CreateReferenciaPostRequest $request)
    {
        $input = $request->all();

        $referenciaPost = $this->referenciaPostRepository->create($input);

        Flash::success('Referencia Post saved successfully.');

        return redirect(route('referenciaPosts.index'));
    }

    /**
     * Display the specified ReferenciaPost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $referenciaPost = $this->referenciaPostRepository->findWithoutFail($id);

        if (empty($referenciaPost)) {
            Flash::error('Referencia Post not found');

            return redirect(route('referenciaPosts.index'));
        }

        return view('referencia_posts.show')->with('referenciaPost', $referenciaPost);
    }

    /**
     * Show the form for editing the specified ReferenciaPost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $referenciaPost = $this->referenciaPostRepository->findWithoutFail($id);

        if (empty($referenciaPost)) {
            Flash::error('Referencia Post not found');

            return redirect(route('referenciaPosts.index'));
        }

        return view('referencia_posts.edit')->with('referenciaPost', $referenciaPost);
    }

    /**
     * Update the specified ReferenciaPost in storage.
     *
     * @param  int              $id
     * @param UpdateReferenciaPostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReferenciaPostRequest $request)
    {
        $referenciaPost = $this->referenciaPostRepository->findWithoutFail($id);

        if (empty($referenciaPost)) {
            Flash::error('Referencia Post not found');

            return redirect(route('referenciaPosts.index'));
        }

        $referenciaPost = $this->referenciaPostRepository->update($request->all(), $id);

        Flash::success('Referencia Post updated successfully.');

        return redirect(route('referenciaPosts.index'));
    }

    /**
     * Remove the specified ReferenciaPost from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $referenciaPost = $this->referenciaPostRepository->findWithoutFail($id);

        if (empty($referenciaPost)) {
            Flash::error('Referencia Post not found');

            return redirect(route('referenciaPosts.index'));
        }

        $this->referenciaPostRepository->delete($id);

        Flash::success('Referencia Post deleted successfully.');

        return redirect(route('referenciaPosts.index'));
    }
}
