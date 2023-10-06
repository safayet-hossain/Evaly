
@extends('backend.master')


@section('content')

<div class="container">
  <div>
    <h2>Customer List</h2>
  </div>

   <div> 
   <a href="{{route('customerinfo')}}" type="button" class="btn btn-primary">Create New Customer</a>
   </div>
   <br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>  
      <th scope="col">Contact</th>  
      <th scope="col">Address</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($customer as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->address}}</td>
 
      
    </tr>
 @endforeach
  </tbody>
</table>
{{$customer->links()}}
</div>


@endsection