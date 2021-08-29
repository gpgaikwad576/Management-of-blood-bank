@extends('layouts.app')
@section('content')
    
    <h1>id:<strong>{{$brequest->id}}</strong></h1>
    <h4>timestamp:<strong>{{$brequest->updated_at}}</strong></h4>
    
    <h4>Consumer id:<strong>{{$brequest->cid}}</strong></h4>
    <h4>Blood amount:<strong>{{$brequest->bamt}}</strong></h4>
    <h4>Blood Group:<strong>{{$brequest->bgrp}}</strong></h4>
@endsection