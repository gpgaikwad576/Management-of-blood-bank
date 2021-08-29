@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' =>['App\Http\Controllers\BloodController@update',$blood->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('did', 'donor id')}}
            {{Form::text('did',$blood->did, ['class' => 'form-control', 'placeholder' => 'donor id'])}}
        </div>
        <div class="form-group">
            {{Form::label('eid', 'employee id')}}
            {{Form::text('eid',$blood->eid, ['class' => 'form-control', 'placeholder' => 'emp id'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('bgrp', 'Blood group')}}
            {{Form::text('bgrp',$blood->bgrp, ['class' => 'form-control', 'placeholder' => 'blood group'])}}
        </div>
       
        
            

        
            
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection