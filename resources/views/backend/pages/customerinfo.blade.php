@extends('backend.master')
@section('content')

<div class="container">
  <h2>Enter Your Information</h2> <br>
<form action="{{route('customer.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" id="" placeholder="Enter your name">
    
  </div>
  <div class="form-group">
    <label for="">Contact</label>
    <input type="tel" class="form-control" name="contact" placeholder="Enter your Contact">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your descrption">
  </div>
  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter your descrption">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</form>
</div>

@endsection