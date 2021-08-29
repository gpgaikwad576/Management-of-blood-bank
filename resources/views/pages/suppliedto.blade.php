@extends('layouts.app')
@section('content')
    <h1>Supplies</h1>
    <table class="table">
    <tr>
    <th> id</th>
    <th>Timestamp</th>
  </tr>
    @if(count($suppliedtos)>0)
        @foreach($suppliedtos as $suppliedto)
            <tr>
                <td><a href="/Suppliedto/{{$suppliedto->id}}">{{$suppliedto->id}} </a></td>
                <td>{{$suppliedto->updated_at}}</td>
            </tr>
                
        
        @endforeach
    </table>
    @else
        <h4>No supplies found</h4>
    @endif
    {{$suppliedtos->links()}}
@endsection