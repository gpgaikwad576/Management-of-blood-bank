@extends('layouts.app')
@section('content')
    <h1>craete  employee:</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\EmployeeController@store'],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('add', 'address')}}
            {{Form::text('add','', ['class' => 'form-control', 'placeholder' => 'address'])}}
        </div>
        <div class="form-group">
            {{Form::label('Role', 'Role')}}
            {{Form::text('Role','', ['class' => 'form-control', 'placeholder' => 'role'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone Number')}}
            {{Form::number('phone','', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('salary', 'salary')}}
            {{Form::number('salary','', ['class' => 'form-control', 'placeholder' => 'salary','step'=>'0.1'])}}
        </div>
        
            <div class="form-group">
            {{Form::label('dcount', 'Donors serviced')}}
            {{Form::number('dcount','', ['class' => 'form-control', 'placeholder' => '0','step'=>'0.1'])}}
        </div>

        <div class="form-group">
            {{Form::label('exp', 'experience')}}
            {{Form::number('exp','', ['class' => 'form-control', 'placeholder' => '0 yrs','step'=>'0.1'])}}
        </div>
        {{Form::date('join_date', \Carbon\Carbon::now())}}
        <br>
        <br>
        <div class="form-group">
            {{Form::label('dignity', 'dignity')}}
            {{Form::textarea('dignity','', ['class' => 'ckeditor form-control', 'placeholder' => 'good'])}}
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection