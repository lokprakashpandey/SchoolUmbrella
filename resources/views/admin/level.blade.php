@extends('admin.index')

@section('content')

	@if(session('sucess_message'))
		{{session('sucess_message')}} <!-- session is object give by \Session -->
	@endif

	@if(session('error_message'))
		{{session('error_message')}}
	@endif
	<table>
		<tr>
			<td>S.N.</td>
			<td>Name</td>
		</tr>
		@foreach($levels as $index => $level) 
		
		<tr>
 			<td>{{$index+1}}</td>
			
			<td>{{$level->name}}</td>
			<td> <a href="{{url('myAdmin/levels/del')}}/{{$level->id}}">Del</a> </td>
			<td> <a href="{{url('myAdmin/levels/edit')}}/{{$level->id}}">Edit</a></td>
		</tr>
		@endforeach			
	</table>
	<a href="{{url('myAdmin/levels/add')}}">Add Level</a>
@endsection 

<?php
/* For Comment Only*/
/* @foreach($levels as $level)
<!-- $index+1, gives count foreach -->
<!-- <td>{{$level->id}}</td>, Here,level->id, id comes from table-->
*/
?>