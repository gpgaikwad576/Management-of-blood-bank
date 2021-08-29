@extends('layouts.app')
@section('content')
    <h1>Blood </h1>

    @if(count($bloods)>0)
    <table class="table">
  <tr>
    <th>Blood id</th>
    <th>Timestamp</th>
  </tr>
  
        @foreach($bloods as $blood)
            <tr>
                <td><a href="/Blood/{{$blood->id}}"><p>{{$blood->id}} </p></a></td>
                <td><p>{{$blood->updated_at}} </p></td>
            </tr>
                
            
        @endforeach
    @else
        <h4>No blood found</h4>
    @endif
    {{$bloods->links()}}
@endsection