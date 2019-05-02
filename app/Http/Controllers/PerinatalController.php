<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Http\Requests;
use App\Repositories\FotoRepository;
use App\DataTables\PerinatalDataTable;
use App\Repositories\PerinatalRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePerinatalRequest;
use App\Http\Requests\UpdatePerinatalRequest;

class PerinatalController extends AppBaseController
{
    /** @var  PerinatalRepository */
    private $perinatalRepository;
    private $fotoRepository;

    public function __construct(PerinatalRepository $perinatalRepo, FotoRepository $fotoRepo)
    {
        $this->perinatalRepository = $perinatalRepo;
        $this->fotoRepository = $fotoRepo;
    }

    /**
     * Display a listing of the Perinatal.
     *
     * @param PerinatalDataTable $perinatalDataTable
     * @return Response
     */
    public function index()
    {
        $perinatal = $this->perinatalRepository->first();
        return view('pages.perinatal', compact('perinatal'));
    }

    /**
     * Show the form for creating a new Perinatal.
     *
     * @return Response
     */
    public function create()
    {
        return view('perinatals.create');
    }

    /**
     * Store a newly created Perinatal in storage.
     *
     * @param CreatePerinatalRequest $request
     *
     * @return Response
     */
    public function store(CreatePerinatalRequest $request)
    {
        $input = $request->all();

        $perinatal = $this->perinatalRepository->create($input);

        Flash::success('Perinatal saved successfully.');

        return redirect(route('perinatals.index'));
    }

    /**
     * Display the specified Perinatal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perinatal = $this->perinatalRepository->findWithoutFail($id);

        if (empty($perinatal)) {
            Flash::error('Página não encontrada');

            return redirect(route('perinatals.index'));
        }

        return view('perinatals.show')->with('perinatal', $perinatal);
    }

    /**
     * Show the form for editing the specified Perinatal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perinatal = $this->perinatalRepository->findWithoutFail($id);

        if (empty($perinatal)) {
            Flash::error('Página não encontrada');

            return redirect(route('perinatals.index'));
        }

        return view('perinatals.edit')->with('perinatal', $perinatal);
    }

    /**
     * Update the specified Perinatal in storage.
     *
     * @param  int              $id
     * @param UpdatePerinatalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerinatalRequest $request)
    {
        $perinatal = $this->perinatalRepository->findWithoutFail($id);

        if (empty($perinatal)) {
            Flash::error('Página não encontrada');

            return redirect(route('perinatals.index'));
        }

        $perinatal = $this->perinatalRepository->update($request->all(), $id);

        //Se tiver foto de capa, remover anterior, criar nova, upar pro cloudinary e deletar local
        if ($request->file) {

            if ($perinatal->fotoCapa) {
                $perinatal->fotoCapa->delete();
            }

            $foto = $this->fotoRepository->uploadAndCreate($request);
            $perinatal->fotoCapa()->save($foto);

            //Upload p/ Cloudinary e delete local
            $publicId = "perinatal_capa_".time();
            $retorno = $this->fotoRepository->sendToCloudinary($foto, $publicId, env('CLOUDINARY_CLOUD_FOLDER'));
            $this->fotoRepository->deleteLocal($foto->id);
        }


        Flash::success('Página perinatal atualizada com sucesso.');

        return redirect(route('perinatals.edit', $perinatal));
    }

    /**
     * Remove the specified Perinatal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perinatal = $this->perinatalRepository->findWithoutFail($id);

        if (empty($perinatal)) {
            Flash::error('Página não encontrada');

            return redirect(route('perinatals.index'));
        }

        $this->perinatalRepository->delete($id);

        Flash::success('Perinatal deleted successfully.');

        return redirect(route('perinatals.index'));
    }
}
