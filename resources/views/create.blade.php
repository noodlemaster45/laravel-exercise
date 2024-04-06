@extends('layout.app')
@section('content')
<form action="/post" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="file" class="form-control" id="inputImg" name="inputImg">
      </div>
      <div class="form-group col-md-6">
        <label for="inputName">Tên sản phẩm</label>
        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Tên sản phẩm">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDesc">Mô tả</label>
        <input type="text" class="form-control" id="inputDesc" name="inputDesc" placeholder="Nhập mô tả">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPrice">Giá</label>
      <input type="text" class="form-control" id="inputPrice" name="inputPrice" placeholder="Nhập giá (VNĐ)">
    </div>
   
    <div class="form-group">
      <label>Chọn thể loại</label>
     <select name = "category">
      @foreach ($category as $category)
          <option value={{ $category->id }}>
          {{ $category->name }}</option>
      @endforeach
     </select>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
  @if ($errors->any())  
  <div> 
    @foreach ($errors->all() as $errors)
    <p class="text-danger">
      {{ $errors }}
    </p>
        
    @endforeach
  </div>
  @endif
@endsection