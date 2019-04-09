<?php

namespace App\Http\Controllers;

use \App\CommerciauxModel;
use Illuminate\Http\Request;

class CommerciauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commerciaux = CommerciauxModel::all();
        return $commerciaux;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.newAddresse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //$data['user_id'] = auth()->id();
        $commercial = CommerciauxModel::create($data);
        return $commercial;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commercial = CommerciauxModel::where('id', '=', $id)->first();
        return $commercial;
        $addresse= AddressesModel::find($id);
        return view('addresses.editAddresse')->with('addresse', $addresse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addresse= AddressesModel::find($id);
        return view('addresses.editAddresse')->with('addresse', $addresse);
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
        $data = $request->all();
        AddressesModel::find($id)->update($data);
        return redirect()->route('adresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddressesModel::find($id)->delete();
        return redirect()->route('adresses.index');
    }
}
