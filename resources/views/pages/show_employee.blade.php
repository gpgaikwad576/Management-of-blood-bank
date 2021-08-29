@extends('layouts.app')
@section('content')
    
    <h1>{{$employee->ename}}</h1>
    <h4>Timestamp:  <strong>{{$employee->updated_at}}</strong></h4>
    <h4>Employee id:  <strong>{{$employee->id}}</strong></h4>
    <h4>Address:  <strong>{{$employee->address}}</strong></h4>
    <h4>Contact:  <strong>{{$employee->phone}}</strong></h4>
    <h4>experience:  <strong>{{$employee->experience}}</strong></h4>
    <h4>Donor serviced:  <strong>{{$employee->dcount}}</strong></h4>
    <h4>salary:  <strong>{{$employee->salary}}</strong></h4>
     <h4>Dignity:  <strong>{{$employee->dignity}}</strong></h4>
    <h4>join date:  <strong>{{$employee->join_date}}</strong></h4>
    <h4>type:  <strong>{{$employee->type}}</strong></h4>
    <a href="/Employee/{{$employee->id}}/edit" class="btn btn-success">Edit</a>
     {!!Form::open(['action' => ['App\Http\Controllers\EmployeeController@destroy', $employee->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection