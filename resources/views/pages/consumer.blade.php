@extends('layouts.app')
@section('content')
    <h1>consumers</h1>
    <table class="table">
  <tr>
    <th>Consumer name</th>
    <th>Timestamp</th>
  </tr>
    @if(count($consumers)>0)
        @foreach($consumers as $consumer)
            <tr>
                <td><a href="/Consumer/{{$consumer->id}}">{{$consumer->cname}}</a></td>
                <td>{{$consumer->updated_at}}</td>
            </tr>
            
        @endforeach
    </table>
    @else
        <h4>No consumers found</h4>
    @endif
    {{$consumers->links()}}
@endsection