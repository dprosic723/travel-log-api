<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Data\TravelLogData;
use App\Models\TravelLog;
class TravelLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelLogData $data)
    {
        $travelLog = TravelLog::create([
            'type' => $data->type,
            'departure_date' => $data->departureDate,
            'arrival_date' => $data->arrivalDate,
            'departure_place' => $data->departurePlace,
            'arrival_place' => $data->arrivalPlace,
            'accommodation_place' => $data->accommodationPlace,
            'comment' => $data->comment
        ]);

        return TravelLogData::from($travelLog);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
