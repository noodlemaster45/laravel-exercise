@extends('layout.app')
@section('content')
<a href="{{ route('test1') }}/123">click to quit IT</a>
<h3>welcome to detail</h3>
    
    @foreach ($detail as $item)
    <h3>{{ $item }}</h3>
    @endforeach
@endsection
