<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use Illuminate\Http\Request;
use App\Repositories\HomepageRepository;
use App\Repositories\FotoRepository;
use App\Http\Requests\CreateHomepageRequest;
use App\Http\Requests\UpdateHomepageRequest;
use Prettus\Repository\Criteria\RequestCriteria;

class HomepageController extends AppBaseController
{
    /** @var HomepageRepository */
    private $homepageRepository;

    /** @var FotoRepository */
    private $fotoRepository;

    /**
     * __construct
     *
     * @param HomepageRepository $homepageRepo
     * @param FotoRepository $fotoRepo
     */
    public function __construct(HomepageRepository $homepageRepo, FotoRepository $fotoRepo)
    {
        $this->homepageRepository = $homepageRepo;
        $this->fotoRepository = $fotoRepo;
    }

    /**
     * Display a listing of the Homepage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->homepageRepository->pushCriteria(new RequestCriteria($request));
        $homepages = $this->homepageRepository->first();

        return view('admin.homepage.index')
            ->with('Homepage', $homepages);
    }

    /**
     * Show the form for creating a new Homepage.
     *
     * @return Response
     */
    public function create()
    {
        return view('homepages.create');
    }

    /**
     * Store a newly created Homepage in storage.
     *
     * @param CreateHomepageRequest $request
     *
     * @return Response
     */
    public function store(CreateHomepageRequest $request)
    {
        $input = $request->all();

        $homepage = $this->homepageRepository->create($input);

        Flash::success('Homepage saved successfully.');

        return redirect(route('homepages.index'));
    }

    /**
     * Display the specified Homepage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $homepage = $this->homepageRepository->findWithoutFail($id);

        if (empty($homepage)) {
            Flash::error('Homepage not found');

            return redirect(route('homepages.index'));
        }

        return view('homepages.show')->with('homepage', $homepage);
    }

    /**
     * Show the form for editing the specified Homepage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $homepage = $this->homepageRepository->findWithoutFail($id);

        if (empty($homepage)) {
            Flash::error('Homepage not found');

            return redirect(route('homepages.index'));
        }

        return view('homepages.edit')->with('homepage', $homepage);
    }

    /**
     * Update the specified Homepage in storage.
     *
     * @param  int              $id
     * @param UpdateHomepageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHomepageRequest $request)
    {
        $homepage = $this->homepageRepository->findWithoutFail($id);

        if (empty($homepage)) {
            Flash::error('Homepage not found');

            return redirect(route('homepages.index'));
        }

        $homepage = $this->homepageRepository->update($request->all(), $id);

        Flash::success('Homepage updated successfully.');

        return redirect(route('homepages.index'));
    }

    /**
     * Remove the specified Homepage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $homepage = $this->homepageRepository->findWithoutFail($id);

        if (empty($homepage)) {
            Flash::error('Homepage not found');

            return redirect(route('homepages.index'));
        }

        $this->homepageRepository->delete($id);

        Flash::success('Homepage deleted successfully.');

        return redirect(route('homepages.index'));
    }

    /**
     * Metodo para receber o post de trocar a foto de capa
     *
     * @return void
     */
    public function postTrocaFotoFundo(Request $request)
    {
        $Homepage = $this->homepageRepository->first();

        if ($request->file) {
            if ($Homepage->fotoFundo()->first()) {
                $Homepage->fotoFundo()->first()->delete();
            }

            $request->request->add(['tipo' => \App\Models\Foto::TIPO_HOME_BG]);
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $Homepage->fotoFundo()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = "jussara_homepage_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId);
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto de fundo atualizada com sucesso.');

        return redirect()->back();
    }
}
