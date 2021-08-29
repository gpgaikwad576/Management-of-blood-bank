<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Suppliedto;

class SuppliedtoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliedtos=suppliedto::orderBy('updated_at','desc')->paginate(1);
        return view('pages.suppliedto')->with('suppliedtos',$suppliedtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_suppliedto');
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
            'tcost' => 'required',
            'amt' => 'required',
            'cid'=>'required',
            'bid'=>'required',
        
        ]);

        $suppliedto=new Suppliedto;
        $suppliedto->cid=$request->input('cid');
        $suppliedto->tcost=$request->input('tcost');
        $suppliedto->bid=$request->input('bid');
        $suppliedto->amt=$request->input('amt');
        


        $suppliedto->save();
        return redirect('/Suppliedto')->with('success','suppliedto registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suppliedto=Suppliedto::find($id);
        return view('pages.show_suppliedto')->with('suppliedto',$suppliedto);
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
