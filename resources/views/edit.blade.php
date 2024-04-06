@extends('layout.app')
@section('content')
<form action="/post/{{ $product->id }}" method="post">
  @csrf
  @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName">Tên sản phẩm</label>
        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Tên sản phẩm" value="{{ $product->name }}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDesc">Mô tả</label>
        <input type="text" class="form-control" id="inputDesc" name="inputDesc" placeholder="Nhập mô tả" value="{{ $product->description }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPrice">Giá</label>
      <input type="text" class="form-control" id="inputPrice" name="inputPrice" placeholder="Nhập giá (VNĐ)" value="{{ $product->price }}">
    </div>
    <label>Chọn thể loại</label>
     <select name = "category">
      @foreach ($category as $category)
      @if ($category->id ==$product->category_id)
      <option value={{ $category->id }} selected>
        {{ $category->name }}</option>
      @else
      <option value={{ $category->id }}>
        {{ $category->name }}</option>
      @endif
      @endforeach
     </select>
    </div>
   
    <button type="submit" class="btn btn-primary" >Sửa</button>
    
  </form>
@endsection