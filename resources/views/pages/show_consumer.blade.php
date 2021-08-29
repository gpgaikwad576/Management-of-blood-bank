@extends('layouts.app')
@section('content')
    
    <h1>{{$consumer->cname}}</h1>

    <h4>Timestamp:  <strong>{{$consumer->updated_at}}</strong></h4>
    <h4>Donor id:  <strong>{{$consumer->id}}</strong></h4>
    <h4>Address:  <strong>{{$consumer->address}}</strong></h4>
   <h4>Contact:  <strong>{{$consumer->phone}}</strong></h4>
    <h4>Consumer type:  <strong>{{$consumer->type}}</strong></h4>
    <h4>Health properties:  <strong>{{$consumer->health_prop}}</strong></h4>
    
    <a href="/Consumer/{{$consumer->id}}/edit" class="btn btn-success">Edit</a>
     {!!Form::open(['action' => ['App\Http\Controllers\ConsumerController@destroy', $consumer->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection