@extends('backend.master')


@section('content')

<div class="container mt-4 ">
  <div>
    <h2>Brand Details</h2>
  </div>
  <br>
<div>

<a href="{{route('add.brand')}}" type="button" class="btn btn-primary">Add New Brand</a>
</div>
 <br>

 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">BrandName</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach($Brand as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Brand_name}}</td>
      <td>{{$item->Product_name}}</td>
      <td>{{$item->Price}}</td>
      <td>{{$item->Quantity}}</td>

      <td>
        <a href="{{route('brand.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('edit.brand',$item->id)}}" class="btn btn-success" >Edit</a>
        <a href="{{route('brand.delete',$item->id)}}" class="btn btn-danger" >Delete</a>


    </td>


    </tr>
 @endforeach

  </tbody>
</table>
{{$Brand->links()}}
@endsection

