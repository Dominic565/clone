<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentinformationsRequest;
use App\Http\Requests\UpdatestudentinformationsRequest;
use App\Repositories\studentinformationsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class studentinformationsController extends AppBaseController
{
    /** @var  studentinformationsRepository */
    private $studentinformationsRepository;

    public function __construct(studentinformationsRepository $studentinformationsRepo)
    {
        $this->studentinformationsRepository = $studentinformationsRepo;
    }

    /**
     * Display a listing of the studentinformations.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $studentinformations = $this->studentinformationsRepository->all();

        return view('studentinformations.index')
            ->with('studentinformations', $studentinformations);
    }

    /**
     * Show the form for creating a new studentinformations.
     *
     * @return Response
     */
    public function create()
    {
        return view('studentinformations.create');
    }

    /**
     * Store a newly created studentinformations in storage.
     *
     * @param CreatestudentinformationsRequest $request
     *
     * @return Response
     */
    public function store(CreatestudentinformationsRequest $request)
    {
        $input = $request->all();

        $studentinformations = $this->studentinformationsRepository->create($input);

        Flash::success('Studentinformations saved successfully.');

        return redirect(route('studentinformations.index'));
    }

    /**
     * Display the specified studentinformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        return view('studentinformations.show')->with('studentinformations', $studentinformations);
    }

    /**
     * Show the form for editing the specified studentinformations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        return view('studentinformations.edit')->with('studentinformations', $studentinformations);
    }

    /**
     * Update the specified studentinformations in storage.
     *
     * @param int $id
     * @param UpdatestudentinformationsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestudentinformationsRequest $request)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        $studentinformations = $this->studentinformationsRepository->update($request->all(), $id);

        Flash::success('Studentinformations updated successfully.');

        return redirect(route('studentinformations.index'));
    }

    /**
     * Remove the specified studentinformations from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentinformations = $this->studentinformationsRepository->find($id);

        if (empty($studentinformations)) {
            Flash::error('Studentinformations not found');

            return redirect(route('studentinformations.index'));
        }

        $this->studentinformationsRepository->delete($id);

        Flash::success('Studentinformations deleted successfully.');

        return redirect(route('studentinformations.index'));
    }
}
