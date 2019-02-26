
@extends('layout')
@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container uper">
  <form method="post" action="{{action('SalesController@update', $id)}}">
  {{csrf_field()}} <input name="_method" type="hidden" value="PATCH">
    <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter New Name"  value="{{$sales->name}}"/>
          </div>
          <div class="form-group">
              <label for="email"> Email :</label>
              <input type="text" class="form-control" name="email" placeholder="Enter New Email" value="{{$sales->email}}"/>
          </div>
          <div class="form-group">
              <label for="telephone_number"> Telephone Number :</label>
              <input type="text" class="form-control" name="telephone_number" placeholder="Enter New Telephone Number" value="{{$sales->telephone_number}}"/>
          </div>
          <div class="form-group">
              <label for="joined_date"> Joined Date :</label>
              <input type="text" class="form-control" name="joined_date" placeholder="Enter New Joined Date" value="{{$sales->joined_date}}"/>
          </div>
          <div class="form-group">
              <label for="current_working_routes"> Current Working Routes :</label>
              <input type="text" class="form-control" name="current_working_routes" placeholder="Enter New Current Working Routes" value="{{$sales->current_working_routes}}"/>
          </div>
          <div class="form-group">
              <label for="comments"> Comments :</label>
              <input type="text" class="form-control" name="comments" placeholder="Enter New Comments" value="{{$sales->comments}}"/>
          </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection