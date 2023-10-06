@extends('backend.master')

@section('content')

<div class="container mt-4">
  <div>
    <h1>All Reports </h1>
  </div>

<div class="row">
 <div class="col-sm-3">
    <!-- Product reports -->
    <a href="{{route('report.product')}}" type="button" class="btn btn-primary btn-lg btn-block">Product Report</a>
   <!-- Brand reports -->

   <a href="{{route('report.brand')}}" type="button" class="btn btn-primary btn-lg btn-block">Brand Report</a>
    <!-- Category reports -->
<a href="{{route('report.category')}}" type="button" class="btn btn-primary btn-lg btn-block">Category Report</a>
<!-- Customer reports -->
<a href="{{route('report.customer')}}" type="button" class="btn btn-primary btn-lg btn-block">Customer Report</a>
 </div>
@endsection