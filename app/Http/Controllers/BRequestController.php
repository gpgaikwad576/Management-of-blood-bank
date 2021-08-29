<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\BRequest;

class BRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brequests=BRequest::orderBy('updated_at','desc')->paginate(1);
        return view('pages.brequest')->with('brequests',$brequests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_brequest');
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
            'bgrp' => 'required',
            'bamt' => 'required',
            'cid'=>'required',
        
        
        ]);

        $brequest=new BRequest;
        $brequest->cid=$request->input('cid');
        $brequest->bgrp=$request->input('bgrp');
        
        $brequest->bamt=$request->input('bamt');
        


        $brequest->save();
        return redirect('/BRequest')->with('success','Blood Requested ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brequest=BRequest::find($id);
        return view('pages.show_brequest')->with('brequest',$brequest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
