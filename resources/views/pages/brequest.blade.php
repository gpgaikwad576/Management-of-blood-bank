@extends('layouts.app')
@section('content')
    <h1>Supplies</h1>
    <table class="table">
    <tr>
    <th> id</th>
    <th>Timestamp</th>
  </tr>
    @if(count($brequests)>0)
        @foreach($brequests as $brequest)
            <tr>
                <td><a href="/BRequest/{{$brequest->id}}">{{$brequest->id}} </a></td>
                <td>{{$brequest->updated_at}}</td>
            </tr>
                
        
        @endforeach
    </table>
    @else
        <h4>No requests found</h4>
    @endif
    {{$brequests->links()}}
@endsection