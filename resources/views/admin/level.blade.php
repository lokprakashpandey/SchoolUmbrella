@extends('admin.index')

@section('content')
	<table>
		<tr>
			<td>S.N.</td>
			<td>Name</td>
		</tr>
		@foreach($levels as $level)
		<tr>
			<td>{{$level->id}}</td>
			<td>{{$level->name}}</td>
		</tr>
		@endforeach			
	</table>
	<a href="{{url('myAdmin/levels/add')}}">Add Level</a>
@endsection 