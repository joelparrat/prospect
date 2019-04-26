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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commercial = CommerciauxModel::where('id', '=', $id)->first();
        return $commercial;
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
        $commercial = CommerciauxModel::find($id)->update($data);
        return $commercial;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commercial = CommerciauxModel::find($id)->delete();
        return $commercial;
    }
}
