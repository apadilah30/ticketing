<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\Route as Rute;
use App\Models\Transportation;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rute::all();

        return view('data-master.route.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportation = Transportation::all();

        return view('data-master.route.create', compact('transportation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'depart_at' => 'required',
            'route_from' => 'required',
            'route_to' => 'required',
            'price_economy' => 'required|numeric|min:0',
            'price_business' => 'required|numeric|min:0',
            'price_vip' => 'required|numeric|min:0',
            'transportation' => 'required'
        ]);

        Rute::create([
            'depart_at' => $request->depart_at,
            'route_from' => $request->route_from,
            'route_to' => $request->route_to,
            'price_economy' => $request->price_economy,
            'price_business' => $request->price_business,
            'price_vip' => $request->price_vip,
            'transportation_id' => $request->transportation,
        ]);

        return redirect()->route('data-master.route.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rute::find($id);
        $transportation = Transportation::all();

        return view('data-master.route.edit', compact([
            'data','transportation'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'depart_at' => 'required',
            'route_from' => 'required',
            'route_to' => 'required',
            'price' => 'required|numeric|min:0',
            'transportation' => 'required'
        ]);

        $route = Rute::find($id);
        
        $route->update([
            'depart_at' => $request->depart_at,
            'route_from' => $request->route_from,
            'route_to' => $request->route_to,
            'price' => $request->price,
            'transportation_id' => $request->transportation,
        ]);

        return redirect()->route('data-master.route.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rute::find($id);
        $data->delete();

        return redirect()->route('data-master.route.index');
    }
}
