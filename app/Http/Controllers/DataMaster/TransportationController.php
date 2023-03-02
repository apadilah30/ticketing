<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\Transportation;
use App\Models\TransportationType;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transportation::with('type')->get();

        return view('data-master.transportation.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = TransportationType::all();

        return view('data-master.transportation.create', compact('type'));
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
            'code' => 'required|max:6|unique:transportations,code',
            'description' => 'required',
            'seat_qty' => 'required|numeric|min:0',
            'type' => 'required'
        ]);

        Transportation::create([
            'code' => $request->code,
            'description' => $request->description,
            'seat_qty' => $request->seat_qty,
            'transportation_type_id' => $request->type,
        ]);

        return redirect()->route('data-master.transportation.index');
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
        $data = Transportation::find($id);
        $type = TransportationType::all();

        return view('data-master.transportation.edit', compact(['data','type']));
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
            'code' => 'required|max:6|unique:transportations,code,'.$id,
            'description' => 'required',
            'seat_qty' => 'required|numeric|min:0',
            'type' => 'required'
        ]);

        $data = Transportation::find($id);

        $data->update([
            'code' => $request->code,
            'description' => $request->description,
            'seat_qty' => $request->seat_qty,
            'transportation_type_id' => $request->type,
        ]);

        return redirect()->route('data-master.transportation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Transportation::find($id);
        $data->delete();

        return redirect()->route('data-master.transportation.index');
    }
}
