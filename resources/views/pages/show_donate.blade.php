@extends('layouts.app')
@section('content')
    
    <h1>Donation id:{{$donate->id}}</h1>
    <h4>Employee id:<strong>{{$donate->eid}}</strong></h4>
    <h4>Blood id:<strong>{{$donate->bid}}</strong></h4>
    <h4>donor id:<strong>{{$donate->did}}</strong></h4>
    <h4>blood amount:<strong>{{$donate->bamt}}</strong></h4>
@endsection