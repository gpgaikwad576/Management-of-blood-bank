@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\ConsumerController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('add', 'address')}}
            {{Form::text('add', '', ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::number('phone','', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
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
            {{Form::textarea('health','', ['class' => 'ckeditor form-control', 'placeholder' => 'health properties'])}}
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection