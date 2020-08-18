
@extends('masterlayout.usermaster')

@section('title', 'User Page')

@section('sidebar')
    @parent

    <p>Array Append</p>
@endsection

@section('content')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">FirstMonth</th>
      <th scope="col">FirstScore</th>
      <th scope="col">SecondMonth</th>
      <th scope="col">SecondScore</th>

    </tr>
  </thead>
  <tbody>
	@foreach ( $data as $row )
		<tr>
 		<td>{{$row['name']}}</td>
 		<td>{{$row['phone']}}</td>
 		<td>{{$row['email']}}</td>
 		<td>{{$row['address']}}</td>
 		@foreach($row['score'] as $key=>$value)
 			<td>{{$key}}</td>
 			<td>{{$value}}</td>
 		@endforeach
 		</tr>
	@endforeach
	</tbody>
</table>

@endsection


