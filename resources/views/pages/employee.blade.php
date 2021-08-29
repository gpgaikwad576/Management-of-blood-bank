@extends('layouts.app')
@section('content')
    <h1>employees</h1>
    <table>
    <tr>
    <th>name</th>
    <th>Timestamp</th>
  </tr>
    @if(count($employees)>0)
        @foreach($employees as $employee)
            <tr>
                <td><a href="/Employee/{{$employee->id}}">{{$employee->ename}}</a></td>
                <td>{{$employee->updated_at}}</td>
            </tr>
        @endforeach
    </table>
    @else
        <h4>No employees found</h4>
    @endif
    {{$employees->links()}}
@endsection