<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $data = Reservation::all();

        return view('reports.reservation.index', compact('data'));
    }

    public function pdf()
    {
        $data = Reservation::all();

        dd($data);
    }
}
