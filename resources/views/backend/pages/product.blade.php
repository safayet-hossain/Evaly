@extends('backend.master')


@section('content')

<div class="container mt-4">
<H1>Product Details</H1>
<a href="{{route('add.product')}}" class="btn btn-primary">Add Product Details</a>
<br><br>

<table class="table table-dark">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
   
  @foreach($product as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->brand_data->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->quantity}}</td>
      
      <td>
        <a href="http://" class="btn btn-primary">View</a>
        <a href="http://" class="btn btn-success" >Edit</a>
        <a href="http://" class="btn btn-danger" >Delete</a>
      
    </tr>
    </td>
 @endforeach  
     
  </tbody>
</table>


{{$product->links()}}
</div>
@endsection