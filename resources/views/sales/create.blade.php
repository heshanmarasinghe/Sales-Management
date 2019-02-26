@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper ">
  <div class="card-header">
   <h4> Add Details</h4>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('sales.store') }}">
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email"> Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="telephone_number"> Telephone Number :</label>
              <input type="text" class="form-control" name="telephone_number"/>
          </div>
          <div class="form-group">
              <label for="joined_date"> Joined Date :</label>
              <input type="text" class="form-control" name="joined_date"/>
          </div>
          <div class="form-group">
              <label for="current_working_routes"> Current Working Routes :</label>
              <input type="text" class="form-control" name="current_working_routes"/>
          </div>
          <div class="form-group">
              <label for="comments"> Comments :</label>
              <input type="text" class="form-control" name="comments"/>
          </div>

          <button type="submit" class="btn btn-primary">Add Details</button>
      </form>
  </div>
</div>
@endsection