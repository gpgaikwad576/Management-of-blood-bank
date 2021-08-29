@extends('layouts.app')
@section('content')
    <h1>Donations</h1>
    <table class="table">
        <tr><th>id</th>
            <th>timestamp</th>
        </tr>
    
    @if(count($donates)>0)
        @foreach($donates as $donate)
            <tr>
                <td><a href="/Donate/{{$donate->id}}">{{$donate->id}} </a></td>
                <td>{{$donate->updated_at}}</td>
            </tr>
                
            
        @endforeach
    </table>
    @else
        <h4>No Donations found</h4>
    @endif
    {{$donates->links()}}
@endsection