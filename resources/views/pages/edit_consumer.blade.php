@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\ConsumerController@update',$consumer->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $consumer->cname, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('add', 'address')}}
            {{Form::text('add', $consumer->address, ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        <div class="form-group">
            {{Form::label('bgrp', 'Blood group')}}
            {{Form::text('bgrp', $consumer->bgrp, ['class' => 'form-control', 'placeholder' => 'Blood-Group'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::number('phone', $consumer->contact, ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>
       
        
            {{Form::label('Role', 'Role')}}
        <div class="d-flex ">
            <p>hospital</p>
            {{ Form::radio('Role','h' , true) }}

        
            
        <div class="pl-3">
            <p>patient</p>
        </div>
            {{ Form::radio('Role', 'p' , false) }}
            
        

        
        
    </div>
        <br>
        <br>
        <div class="form-group">
            {{Form::label('health', 'healh properties')}}
            {{Form::textarea('health', $consumer->health_prop, ['class' => 'ckeditor form-control', 'placeholder' => 'health properties'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection