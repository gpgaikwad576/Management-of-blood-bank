@extends('layouts.app')
@section('content')
    <h1>Donors</h1>
    <table class="table">
    <tr> 
    <th> id</th>
    <th>Timestamp</th>
  </tr>
    @if(count($donors)>0)
        @foreach($donors as $donor)
        <tr>
            <div class="well">
                <td><a href="/Donor/{{$donor->id}}">{{$donor->dname}}</a></td>
                <td> {{$donor->updated_at}} </td>
            </div>
        </tr>
        @endforeach
    </table>
    @else
        <h4>No Donors found</h4>
    @endif
    {{$donors->links()}}
@endsection