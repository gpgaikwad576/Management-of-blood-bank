@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\BloodController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('did', 'donor id')}}
            {{Form::text('did','', ['class' => 'form-control', 'placeholder' => 'donor id'])}}
        </div>
        <div class="form-group">
            {{Form::label('eid', 'employee id')}}
            {{Form::text('eid','', ['class' => 'form-control', 'placeholder' => 'emp id'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('bgrp', 'Blood group')}}
            {{Form::text('bgrp','', ['class' => 'form-control', 'placeholder' => 'blood group'])}}
        </div>
       
        
            

        
            
        
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection