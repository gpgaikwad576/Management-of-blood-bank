@extends('layouts.app')
@section('content')
    <h1>craete:</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\SuppliedtoController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('cid', 'consumer id')}}
            {{Form::text('cid','', ['class' => 'form-control', 'placeholder' => ' id'])}}
        </div>
        <div class="form-group">
            {{Form::label('bid', 'blood id')}}
            {{Form::text('bid','', ['class' => 'form-control', 'placeholder' => 'blood id'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('tcost', 'Total cost')}}
            {{Form::text('tcost','', ['class' => 'form-control', 'placeholder' => '0'])}}
        </div>

        <div class="form-group">
            {{Form::label('amt', 'Blood amount')}}
            {{Form::text('amt','', ['class' => 'form-control', 'placeholder' => '1000'])}}
        </div>
       
        
            

        
            
        
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection