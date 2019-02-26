@extends('layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
  <div class="container uper">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone_number</th>
        <th>Joined Date</th>
        <th>Current Working Routes</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sales as $post)
      <tr>
      <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['email']}}</td>
        <td>{{$post['telephone_number']}}</td>
        <td>{{$post['joined_date']}}</td>
        <td>{{$post['current_working_routes']}}</td>
        <td>{{$post['comments']}}</td>
        <td><a href="{{action('SalesController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('SalesController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection