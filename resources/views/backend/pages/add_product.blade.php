@extends('backend.master')

@section('content')

<div class="container">
  <h2>Enter Product Information</h2> <br>
  
<form action="{{route('product_store')}}" method="POST">


  @csrf
  <div class="form-group">
    <label for="">Product Name</label>
    <input type="text" class="form-control" name="productname" id="" placeholder="Enter product name" required>
    
  </div>
  <div class="form-group">
    <label for="">Category</label>
    <select name="category_id" id="">
     @foreach($category as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
   </select>
  </div>
  <div class="form-group">
    <label for="">Brand</label>
   <select name="brand_id" id="">
    @foreach($brand as $row)
    <option value="{{$row->id}}">{{$row->Brand_name}}</option>
    @endforeach
   </select>
  </div>
  
  <div class="form-group">
    <label for="">Price</label>
    <input type="number" min="1" class="form-control" name="price"  placeholder="Enter Product's Price" required>
    
  </div>
  <div class="form-group">
    <label for="">Quantity</label>
    <input type="number" min="1" class="form-control" name="quantity"  placeholder="Enter Product's Quantity" required>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
</div>


@endsection