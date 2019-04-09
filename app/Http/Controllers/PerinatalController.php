<?php

namespace App\Http\Controllers;

use App\DataTables\PerinatalDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePerinatalRequest;
use App\Http\Requests\UpdatePerinatalRequest;
use App\Repositories\PerinatalRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PerinatalController extends AppBaseController
{
    /** @var  PerinatalRepository */
    private $perinatalRepository;

    public function __construct(PerinatalRepository $perinatalRepo)
    {
        $this->perinatalRepository = $perinatalRepo;
    }

    /**
     * Display a listing of the Perinatal.
     *
     * @param PerinatalDataTable $perinatalDataTable
     * @return Response
     */
    public function index()
    {
        return view('pages.perinatal');
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
            Flash::error('Perinatal not found');

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
            Flash::error('Perinatal not found');

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
            Flash::error('Perinatal not found');

            return redirect(route('perinatals.index'));
        }

        $perinatal = $this->perinatalRepository->update($request->all(), $id);

        Flash::success('Perinatal updated successfully.');

        return redirect(route('perinatals.index'));
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
            Flash::error('Perinatal not found');

            return redirect(route('perinatals.index'));
        }

        $this->perinatalRepository->delete($id);

        Flash::success('Perinatal deleted successfully.');

        return redirect(route('perinatals.index'));
    }
}
