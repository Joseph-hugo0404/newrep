<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTouristSpotRequest;
use App\Http\Requests\UpdateTouristSpotRequest;
use App\Repositories\TouristSpotRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TouristSpotController extends AppBaseController
{
    /** @var  TouristSpotRepository */
    private $touristSpotRepository;

    public function __construct(TouristSpotRepository $touristSpotRepo)
    {
        $this->touristSpotRepository = $touristSpotRepo;
    }

    /**
     * Display a listing of the TouristSpot.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $touristSpots = $this->touristSpotRepository->all();

        return view('tourist_spots.index')
            ->with('touristSpots', $touristSpots);
    }

    /**
     * Show the form for creating a new TouristSpot.
     *
     * @return Response
     */
    public function create()
    {
        return view('tourist_spots.create');
    }

    /**
     * Store a newly created TouristSpot in storage.
     *
     * @param CreateTouristSpotRequest $request
     *
     * @return Response
     */
    public function store(CreateTouristSpotRequest $request)
    {
        $input = $request->all();

        $touristSpot = $this->touristSpotRepository->create($input);

        Flash::success('Tourist Spot saved successfully.');

        return redirect(route('touristSpots.index'));
    }

    /**
     * Display the specified TouristSpot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $touristSpot = $this->touristSpotRepository->find($id);

        if (empty($touristSpot)) {
            Flash::error('Tourist Spot not found');

            return redirect(route('touristSpots.index'));
        }

        return view('tourist_spots.show')->with('touristSpot', $touristSpot);
    }

    /**
     * Show the form for editing the specified TouristSpot.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $touristSpot = $this->touristSpotRepository->find($id);

        if (empty($touristSpot)) {
            Flash::error('Tourist Spot not found');

            return redirect(route('touristSpots.index'));
        }

        return view('tourist_spots.edit')->with('touristSpot', $touristSpot);
    }

    /**
     * Update the specified TouristSpot in storage.
     *
     * @param int $id
     * @param UpdateTouristSpotRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTouristSpotRequest $request)
    {
        $touristSpot = $this->touristSpotRepository->find($id);

        if (empty($touristSpot)) {
            Flash::error('Tourist Spot not found');

            return redirect(route('touristSpots.index'));
        }

        $touristSpot = $this->touristSpotRepository->update($request->all(), $id);

        Flash::success('Tourist Spot updated successfully.');

        return redirect(route('touristSpots.index'));
    }

    /**
     * Remove the specified TouristSpot from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $touristSpot = $this->touristSpotRepository->find($id);

        if (empty($touristSpot)) {
            Flash::error('Tourist Spot not found');

            return redirect(route('touristSpots.index'));
        }

        $this->touristSpotRepository->delete($id);

        Flash::success('Tourist Spot deleted successfully.');

        return redirect(route('touristSpots.index'));
    }
}
