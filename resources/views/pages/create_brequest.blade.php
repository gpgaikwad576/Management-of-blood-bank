@extends('layouts.app')
@section('content')
    <h1>Blood Request</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\BRequestController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('cid', 'consumer id')}}
            {{Form::text('cid','', ['class' => 'form-control', 'placeholder' => ' id'])}}
        </div>
        
        
        <div class="form-group">
            {{Form::label('bgrp', 'Blood Group')}}
            {{Form::text('bgrp','', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

        <div class="form-group">
            {{Form::label('bamt', 'Blood amount')}}
            {{Form::text('bamt','', ['class' => 'form-control', 'placeholder' => '1000ml'])}}
        </div>
       
        
            

        
            
        
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection