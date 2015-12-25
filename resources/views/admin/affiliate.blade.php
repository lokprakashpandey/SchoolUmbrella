@extends('admin.index')
@section('content')
	<table>
		<tr>
			<td>S.N.</td>
			<td>Name</td>
			<td>Description</td>
			<td>Country</td>
		</tr>
		@foreach($affiliates as $affiliate)
			<tr>
				<td>{{$affiliate->id}}</td>
				<td>{{$affiliate->name}}</td>
				<td>{{$affiliate->description}}</td>
				<td>{{$affiliate->country['name']}}</td> 
				<!--country['name'], county is an object inside affiliates object  -->
			</tr>
		@endforeach	
	</table>
	<a href="{{url('myAdmin/affiliates/add')}}">Add Affiliate</a>
@endsection