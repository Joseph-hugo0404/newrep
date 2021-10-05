<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOtherOptionRequest;
use App\Http\Requests\UpdateOtherOptionRequest;
use App\Repositories\OtherOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OtherOptionController extends AppBaseController
{
    /** @var  OtherOptionRepository */
    private $otherOptionRepository;

    public function __construct(OtherOptionRepository $otherOptionRepo)
    {
        $this->otherOptionRepository = $otherOptionRepo;
    }

    /**
     * Display a listing of the OtherOption.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $otherOptions = $this->otherOptionRepository->all();

        return view('other_options.index')
            ->with('otherOptions', $otherOptions);
    }

    /**
     * Show the form for creating a new OtherOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('other_options.create');
    }

    /**
     * Store a newly created OtherOption in storage.
     *
     * @param CreateOtherOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateOtherOptionRequest $request)
    {
        $input = $request->all();

        $otherOption = $this->otherOptionRepository->create($input);

        Flash::success('Other Option saved successfully.');

        return redirect(route('otherOptions.index'));
    }

    /**
     * Display the specified OtherOption.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $otherOption = $this->otherOptionRepository->find($id);

        if (empty($otherOption)) {
            Flash::error('Other Option not found');

            return redirect(route('otherOptions.index'));
        }

        return view('other_options.show')->with('otherOption', $otherOption);
    }

    /**
     * Show the form for editing the specified OtherOption.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $otherOption = $this->otherOptionRepository->find($id);

        if (empty($otherOption)) {
            Flash::error('Other Option not found');

            return redirect(route('otherOptions.index'));
        }

        return view('other_options.edit')->with('otherOption', $otherOption);
    }

    /**
     * Update the specified OtherOption in storage.
     *
     * @param int $id
     * @param UpdateOtherOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOtherOptionRequest $request)
    {
        $otherOption = $this->otherOptionRepository->find($id);

        if (empty($otherOption)) {
            Flash::error('Other Option not found');

            return redirect(route('otherOptions.index'));
        }

        $otherOption = $this->otherOptionRepository->update($request->all(), $id);

        Flash::success('Other Option updated successfully.');

        return redirect(route('otherOptions.index'));
    }

    /**
     * Remove the specified OtherOption from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $otherOption = $this->otherOptionRepository->find($id);

        if (empty($otherOption)) {
            Flash::error('Other Option not found');

            return redirect(route('otherOptions.index'));
        }

        $this->otherOptionRepository->delete($id);

        Flash::success('Other Option deleted successfully.');

        return redirect(route('otherOptions.index'));
    }
}
