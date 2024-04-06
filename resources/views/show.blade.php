@extends('layout.app')
@section('content')
    <h3>Tên: {{ $product->name }}</h3>
    <h3>Giá: {{ $product->price }}</h3>
    <h3>Mã loại: {{ $product->category_id }}</h3>
    <h3>Loại: {{ $product->category->name }}</h3>
@endsection