@extends('layouts.main')



@section('container')
<h1>About</h1>
<h3>{{$name}}</h3>
<p>{{$email}}</p>
<img src="img/{{$image}}" alt="mhrp"width="200px">
@endsection

