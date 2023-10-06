@extends('backend.master')
@section('content')

<form action="{{route('category.update',$Category->id)}}" method=POST >
 @method('put')
@csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" value="{{$Category->name}}" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter Name" required>

  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" value="{{$Category->description}}" class="form-control" id="description" name="description" placeholder="Description" required>
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection
