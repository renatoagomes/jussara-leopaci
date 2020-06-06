<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHomepageRequest;
use App\Http\Requests\UpdateHomepageRequest;
use App\Repositories\FotoRepository;
use App\Repositories\HomepageRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HomepageController extends AppBaseController
{
    /** @var HomepageRepository */
    private $homepageRepository;

    /** @var FotoRepository */
    private $fotoRepository;

    /**
     * __construct.
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
    public function update()
    {
        $id = 1;
        $homepage = $this->homepageRepository->findWithoutFail($id);

        if (empty($homepage)) {
            Flash::error('Homepage not found');

            return redirect(route('homepages.index'));
        }

        $homepage = $this->homepageRepository->update(\Request::all(), $id);

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
     * Metodo para receber o post de trocar a foto de capa.
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
            $publicId = 'jussara_homepage_'.time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto de fundo atualizada com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo para receber o post de trocar a foto da secao Apresentacao.
     *
     * @return void
     */
    public function postTrocaFotoApresentacao(Request $request)
    {
        $Homepage = $this->homepageRepository->first();

        if ($request->file) {
            if ($Homepage->fotoApresentacao()->first()) {
                $Homepage->fotoApresentacao()->first()->delete();
            }

            $request->request->add(['tipo' => \App\Models\Foto::TIPO_HOME_APRES]);
            $foto = $this->fotoRepository->uploadAndCreate($request);
            $Homepage->fotoFundo()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = 'homepage_apresentacao_'.time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto da seção apresentação atualizada com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo para receber o post de atualizar as citacoes.
     *
     * @return void
     */
    public function postUpdateCitacoes(Request $request)
    {
        $Homepage = $this->homepageRepository->first();
        $arrFinal = [];

        for ($i = 0; $i < count($request->frases_slider['citacao']); $i++) {
            $arrFinal[] = [
                'frase' => $request->frases_slider['citacao'][$i],
                'autor' => $request->frases_slider['autor_ano'][$i],
                'duracao' => $request->frases_slider['tempo'][$i],
            ];
        }

        $Homepage->frases_slider = json_encode($arrFinal);
        $Homepage->save();

        Flash::success('Citações atualizadas com sucesso.');

        return redirect()->back();
    }

    /**
     * Metodo para receber o post de trocar as fotos da seção Atuação.
     *
     * @return void
     */
    public function postTrocaFotoAtuacao(Request $request)
    {
        $Homepage = $this->homepageRepository->first();

        if ($request->file) {
            if ($Homepage->fotos()->where('tipo', $request->tipo)->first()) {
                $Homepage->fotos()->where('tipo', $request->tipo)->first()->delete();
            }

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $Homepage->fotos()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = 'homepage_atuacao_'.time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }

        Flash::success('Foto da seção atuação atualizada com sucesso!');

        return redirect()->back();
    }
}
