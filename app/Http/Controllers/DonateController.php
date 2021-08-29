<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Donate;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates=Donate::orderBy('updated_at','desc')->paginate(1);
        return view('pages.donate')->with('donates',$donates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_donate');
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
            'bid'=>'required',
            'bamt'=>'required',
        
        ]);

        $donate=new donate;
        $donate->did=$request->input('did');
        $donate->eid=$request->input('eid');
        $donate->bid=$request->input('bid');
        $donate->bamt=$request->input('bamt');
        


        $donate->save();
        return redirect('/Donate')->with('success','donate registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donate=Donate::find($id);
        return view('pages.show_donate')->with('donate',$donate);
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
