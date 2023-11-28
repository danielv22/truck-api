<?php

namespace App\Http\Controllers;

use App\Http\Requests\TruckCreateRequest;
use App\Http\Requests\TruckUpdateRequest;
use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Enums\Status;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Truck::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TruckCreateRequest $request)
    {
        $truck = Truck::create($request->all());
        return response()->json(['truck' => $truck], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        $truck->load('category');
        return response()->json(['truck' => $truck], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TruckUpdateRequest $request, Truck $truck)
    {
        $truck->update($request->all());
        return response()->json(['truck' => $truck], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
        return response()->json(['truck' => $truck], Response::HTTP_ACCEPTED);
    }
}
