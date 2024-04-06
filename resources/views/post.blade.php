@extends('layout.app')
@section('content')
<a href="/post/create"><button>Thêm</button></a>
<form>
<select name="inputCateId" onchange="this.form.submit()"> 
  <option >All 
  @foreach ($category as $category) 
      <option value="{{ $category->id }}"
      @if (Request::get('inputCateId')==$category->id)
          echo selected
      @endif
      >{{$category->name}}
  @endforeach
</select>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Mã </th>
        <th scope="col">Ảnh </th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Loại</th>
        <th scope="col">Giá</th>
        <th scope="col">Xem sản phẩm</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($product as $product)
      
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td><img src={{ asset('images/'.$product->image) }}></td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->price }}</td>
        <td><div><a href="post/{{ $product->id }}/edit"><span class="badge bg-primary rounded-pill">Edit</a></div>
        <form action="/post/{{ $product->id }}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger" onclick="return confirm('chắc chưa?')">Delete</button>
        </form>
        <a href="post/{{ $product->id }}"><span class="badge bg-primary rounded-pill"><i class="fa-solid fa-magnifying-glass"></i></a>
        </td>
        
      </tr>
      @endforeach
     
    </tbody>
  </table>
@endsection
