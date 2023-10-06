@extends('backend.master')


@section('content')

<div class="container mt-4">
  <div>
    <h2>Category List</h2>
  </div>

  <a href="{{route('add.category')}}" type="button" class="btn btn-primary">Add new Category</a>
 <br> </br>

  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
    @foreach($Category as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>


      <td>
        <a href="{{route('category.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('category.edit',$item->id)}}" class="btn btn-success" >Edit</a>
        <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger" >Delete</a>


    </td>

    </tr>
 @endforeach

  </tbody>
</table>
{{$Category->links()}}

@endsection
