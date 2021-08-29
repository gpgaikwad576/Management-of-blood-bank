<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors=Donor::orderBy('updated_at','desc')->paginate(1);
        return view('pages.donor')->with('donors',$donors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_donor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'add' => 'required',
            'bgrp'=>'required',
            'phone'=>'required',
            'age'=>'required',
        ]);

        $donor=new Donor;
        $donor->dname=$request->input('name');
        $donor->address=$request->input('add');
        $donor->bgrp=$request->input('bgrp');
        $donor->contact=$request->input('phone');
        $donor->age=$request->input('age');
        $donor->gender=$request->input('gender');
        $donor->health_prop=$request->input('health');

        $donor->save();
        return redirect('/Donor')->with('success','Donor registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor=Donor::find($id);
        return view('pages.show_donor')->with('donor',$donor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor=Donor::find($id);
        return view('pages.edit_donor')->with('donor',$donor);
    
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
        $this->validate($request, [
            'name' => 'required',
            'add' => 'required',
            'bgrp'=>'required',
            'phone'=>'required',
            'age'=>'required',
        ]);

        $donor=Donor::find($id);
        $donor->dname=$request->input('name');
        $donor->address=$request->input('add');
        $donor->bgrp=$request->input('bgrp');
        $donor->contact=$request->input('phone');
        $donor->age=$request->input('age');
        $donor->gender=$request->input('gender');
        $donor->health_prop=$request->input('health');

        $donor->save();
        return redirect('/Donor')->with('success','Donor information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor=Donor::find($id);
        $donor->delete();
        return redirect('/Donor')->with('error','Donor removed');
    }
}
