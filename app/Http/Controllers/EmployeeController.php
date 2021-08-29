<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::orderBy('updated_at','desc')->paginate(1);
        return view('pages.employee')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.create_employee');
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
            'join_date'=>'required',
            'phone'=>'required',
            'dcount'=>'required',
        ]);

        $employee=new Employee;
        $employee->ename=$request->input('name');
        $employee->address=$request->input('add');
        $employee->dignity=$request->input('dignity');
        $employee->dcount=$request->input('phone');
        $employee->experience=$request->input('experience');
        
        $employee->contact=$request->input('phone');
        $employee->salary=$request->input('salary');
        $employee->join_date=$request->input('join_date');
        $employee->save();
        return redirect('/Employee')->with('success','employee registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        return view('pages.show_employee')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=employee::find($id);
        return view('pages.edit_employee')->with('employee',$employee);
    
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
            'join_date'=>'required',
            'phone'=>'required',
            'dcount'=>'required',
        ]);

        $employee=Employee::find($id);
        $employee->ename=$request->input('name');
        $employee->address=$request->input('add');
        $employee->dignity=$request->input('dignity');
        $employee->dcount=$request->input('phone');
        $employee->experience=$request->input('experience');
        
        $employee->contact=$request->input('phone');
        $employee->salary=$request->input('salary');
        $employee->join_date=$request->input('join_date');
        $employee->save();
        return redirect('/Employee')->with('success','employee updatedd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=employee::find($id);
        $employee->delete();
        return redirect('/Employee')->with('error','employee removed');
    }
}
