<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Transportation;
use App\Models\TransportationType;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'transportation_types' => TransportationType::all()
        ];

        return view('reservation.index', $data);
    }

    public function order(Request $request, $type)
    {
        $data = Route::with(['transportation.type'])->whereHas('transportation', function($query)use($type){
            $query->where('transportation_type_id', $type);
        })->get();

        $data_type = TransportationType::find($type);

        return view('reservation.order', compact(['data','data_type']));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
