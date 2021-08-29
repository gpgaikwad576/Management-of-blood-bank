<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Consumer;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers=Consumer::orderBy('updated_at','desc')->paginate(1);
        return view('pages.consumer')->with('consumers',$consumers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_consumer');
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
            
            'phone'=>'required',
            
        ]);

        $consumer=new Consumer;
        $consumer->cname=$request->input('name');
        $consumer->address=$request->input('add');
        
        $consumer->type=$request->input('Role');
        $consumer->health_prop=$request->input('health_prop');
        
        $consumer->contact=$request->input('phone');
        
        $consumer->save();
        return redirect('/Consumer')->with('success','consumer registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumer=Consumer::find($id);
        return view('pages.show_consumer')->with('consumer',$consumer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumer=Consumer::find($id);
        return view('pages.edit_consumer')->with('consumer',$consumer);
    
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
            
            'phone'=>'required',
            
        ]);

        $consumer=Consumer::find($id);
        $consumer->cname=$request->input('name');
        $consumer->address=$request->input('add');
        
        $consumer->type=$request->input('Role');
        $consumer->health_prop=$request->input('health_prop');
        
        $consumer->contact=$request->input('phone');
        
        $consumer->save();
        return redirect('/Consumer')->with('success','consumer updatedd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consumer=Consumer::find($id);
        $consumer->delete();
        return redirect('/Consumer')->with('error','consumer removed');
    }
}
