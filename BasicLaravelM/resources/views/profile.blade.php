@extends('layouts.app')
@section('content')
<h1>Welcome, {{$name}}
    ID = {{$id}}
    DOB = {{$dob}}
    
    <ul>
    @foreach($details as $d)
        <li>{{$d}}</li>
    @endforeach
    </ul>
</h1>
@endsection