@extends('layouts.app')
@section('content')
    
    <h1>id:<strong>{{$suppliedto->id}}</strong></h1>
    <h4>timestamp:<strong>{{$suppliedto->updated_at}}</strong></h4>
    <h4>Blood id:<strong>{{$suppliedto->bid}}</strong></h4>
    <h4>Consumer id:<strong>{{$suppliedto->cid}}</strong></h4>
    <h4>Blood amount:<strong>{{$suppliedto->bamt}}</strong></h4>
    <h4>Total cost:<strong>{{$suppliedto->tcost}}</strong></h4>
@endsection