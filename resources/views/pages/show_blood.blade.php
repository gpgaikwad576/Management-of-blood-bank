@extends('layouts.app')
@section('content')
    <h1>Blood id: <strong>{{$blood->id}}</strong> </h1>
    
    <h4>Timestamp:  <strong>{{$blood->updated_at}}</strong></h4>
    <h4>Donor:  <strong>{{$blood->donate->donor->id}}</strong></h4>
    <h4>Employee:  <strong>{{$blood->eid}}</strong></h4>
    <h4>Blood Group:  <strong>{{$blood->bgrp}}</strong></h4>

    <a href="/Blood/{{$blood->id}}/edit" class="btn btn-success">Edit</a>
     {!!Form::open(['action' => ['App\Http\Controllers\BloodController@destroy', $blood->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection