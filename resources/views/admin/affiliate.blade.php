@extends('admin.index')
@section('content')
	
	@if(session('sucess_message'))
		{{session('sucess_message')}}
	@endif

	@if(session('error_message'))
		{{session('error_message')}}
	@endif

	<table>
		<tr>
			<td>S.N.</td>
			<td>Name</td>
			<td>Description</td>
			<td>Country</td>
		</tr>
		@foreach($affiliates as $index => $affiliate)
			<tr>
				<td>{{$index+1}}</td>

				<td>{{$affiliate->name}}</td>
				<td>{{$affiliate->description}}</td>
				<td>{{$affiliate->country['name']}}</td> 
				<!--country['name'], county is an object inside affiliates object  -->
				<td><a href="{{url('myAdmin/affiliates/del')}}/{{$affiliate->id}}">Del</a></td>
				<td><a href="{{url('myAdmin/affiliates/edit')}}/{{$affiliate->id}}">Edit</a></td>
			</tr>
		@endforeach	
	</table>
	<a href="{{url('myAdmin/affiliates/add')}}">Add Affiliate</a>
@endsection