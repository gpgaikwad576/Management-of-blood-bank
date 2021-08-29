@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\DonorController@update',$donor->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $donor->dname, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('add', 'address')}}
            {{Form::text('add', $donor->address, ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        <div class="form-group">
            {{Form::label('bgrp', 'Blood group')}}
            {{Form::text('bgrp', $donor->bgrp, ['class' => 'form-control', 'placeholder' => 'Blood-Group'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::number('phone', $donor->contact, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'age')}}
            {{Form::number('age', $donor->age, ['class' => 'form-control', 'placeholder' => 'age'])}}
        </div>
        
            {{Form::label('gender', 'Gender')}}
        <div class="d-flex ">
            <p>male</p>
            {{ Form::radio('gender','male' , true) }}

        
            
        <div class="pl-3">
            <p>female</p>
        </div>
            {{ Form::radio('gender', 'female' , false) }}
            
        

        <div class="pl-3">
            
            <p>other</p>
        </div>
            {{ Form::radio('gender', 'other' , false) }}
        
    </div>
        <br>
        <br>
        <div class="form-group">
            {{Form::label('health', 'healh properties')}}
            {{Form::textarea('health', $donor->health_prop, ['class' => 'ckeditor form-control', 'placeholder' => 'health properties'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection