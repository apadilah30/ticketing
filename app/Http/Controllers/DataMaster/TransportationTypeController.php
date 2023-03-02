<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\TransportationType;
use Illuminate\Http\Request;

class TransportationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TransportationType::all();
        
        return view('data-master.transportation-type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-master.transportation-type.create');
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
            'type' => 'required|max:255',
            'description' => 'required',
        ]);

        TransportationType::create([
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('data-master.transportation-type.index');
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
    public function edit($transportation)
    {
        $data = TransportationType::find($transportation);

        return view('data-master.transportation-type.edit', compact('data'));
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
            'type' => 'required|max:255',
            'description' => 'required',
        ]);

        $data = TransportationType::find($id);
        
        $data->update([
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('data-master.transportation-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TransportationType::find($id);

        $data->delete();
        
        return redirect()->route('data-master.transportation-type.index');
    }
}
