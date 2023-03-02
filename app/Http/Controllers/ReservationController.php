<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Transportation;
use App\Models\TransportationType;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $data = [
            'transportation_types' => TransportationType::all()
        ];

        return view('reservation.index', $data);
    }
}
