@extends('layouts.app')
@section('content')
    
    <h1>{{$donor->dname}}</h1>
    <h4>Timestamp:  <strong>{{$donor->updated_at}}</strong></h4>
    <h4>Donor id:  <strong>{{$donor->id}}</strong></h4>
    <h4>Address:  <strong>{{$donor->address}}</strong></h4>
    <h4>Age:  <strong>{{$donor->age}}</strong></h4>
    <h4>Gender:  <strong>{{$donor->gender}}</strong></h4>
    <h4>Health properties:  <strong>{{$donor->health_prop}}</strong></h4>
    <h4>Contact:  <strong>{{$donor->phone}}</strong></h4>
    <a href="/Donor/{{$donor->id}}/edit" class="btn btn-default">Edit</a>
     {!!Form::open(['action' => ['App\Http\Controllers\DonorController@destroy', $donor->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection