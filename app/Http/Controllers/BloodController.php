<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blood;
use App\Models\Donate;
use App\Models\Donor;
class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloods=Blood::orderBy('updated_at','desc')->paginate(1);
        return view('pages.blood')->with('bloods',$bloods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_blood');
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
            'did' => 'required',
            'eid' => 'required',
            
            'bgrp'=>'required',
            
        ]);

        $blood=new Blood;
        $blood->did=$request->input('did');
        $blood->eid=$request->input('eid');
        
        $blood->bgrp=$request->input('bgrp');
        
        $blood->save();
        return redirect('/Blood')->with('success','blood registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blood=Blood::find($id);
        

        return view('pages.show_blood',compact('donate'))->with('blood',$blood);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blood=Blood::find($id);
        return view('pages.edit_blood')->with('blood',$blood);
    
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
            'did' => 'required',
            'eid' => 'required',
            
            'bgrp'=>'required',
            
        ]);

        $blood=Blood::find($id);
        $blood->did=$request->input('did');
        $blood->eid=$request->input('eid');
        
        $blood->bgrp=$request->input('bgrp');
        
        $blood->save();
        
        return redirect('/Blood')->with('success','blood updatedd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blood=Blood::find($id);
        $blood->delete();
        return redirect('/Blood')->with('error','blood removed');
    }
}
