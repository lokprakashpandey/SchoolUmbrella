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
			<td>SN</td>
			<td>Name</td>
		</tr>
		@foreach($resourceTypes as $index => $resourceType)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$resourceType->name}}</td>
			<td><a href="{{url('myAdmin/resourceTypes/del')}}/{{$resourceType->id}}">Del</a></td>
			<td><a href="{{url('myAdmin/resourceTypes/edit')}}/{{$resourceType->id}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	<a href="{{url('myAdmin/resourceTypes/add')}}">Add ResourceType</a>
@endsection