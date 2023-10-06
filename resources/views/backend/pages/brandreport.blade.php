@extends('backend.master')

@section('content')

<h1>Brand Report</h1>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
    <div>
      <p class="alert-danger"> {{$error}} </p>
  </div>
  @endforeach
  @endif
<form action="{{route('brand.report.search')}}" method="get">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>

<div id="brandReport">

<h1>Report of - {{request()->from_date}} to  {{request()->to_date}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">BrandName</th>
            <!-- <th scope="col">Category</th> -->
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Adding Date</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($brands))
        @foreach($brands as $key=>$item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->Brand_name}}</td>
            <!-- <td>{{$item->category}}</td> -->
            <td>{{$item->Product_name}}</td>
            <td>{{$item->Price}}</td>
            <td>{{$item->created_at}}</td>

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>

<button onclick="printDiv('brandReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


@endsection
