@extends('backend.master')
@section('content')


<form action="{{route('brand.store')}}" method="POST" >

@csrf
  <div class="form-group">
    <label for="">Brand_name</label>
    <input type="text" class="form-control" id="Brand_name" name="Brand_name" aria-describedby="name" placeholder="Enter Brand Name" required>

  </div>
  <div class="form-group">
    <label for="">Product Name</label>
    <input type="text" class="form-control" id="Product_name" name="Product_name" placeholder="Enter Product Name" required>
  </div>

<div class="form-group">
  <label for="Price">Price</label>
  <input type="text" class="form-control" id="price"name="Price" placeholder="Enter price" required>
</div>
<div class="form-group">
  <label for="Price">Quantity</label>
  <input type="numbert" class="form-control" id="Quantity"name="Quantity" placeholder="Enter Quantity" required>
</div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection
