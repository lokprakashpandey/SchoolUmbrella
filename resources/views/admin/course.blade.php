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
			<td>SN.</td>
			<td>Affiliate</td>
			<td>Stream</td>
			<td>Level</td>
			<td>Course</td>
			<td>CourseType</td>
		</tr>
		@foreach($courses as $index => $course)
		<tr>
			<td>{{$index+1}}</td>
			<td>{{$course->affiliate['name']}}</td>
			<td>{{$course->stream['name']}}</td>
			<td>{{$course->level['name']}}</td>
			<td>{{$course->name}}</td>
			<td>{{$course->name}}</td>	

			<td><a href='{{url("myAdmin/courses/del/$course->id")}}'>Del</a></td>
			<td><a href="{{url('myAdmin/courses/edit')}}/{{$course->id}}">Edit</a></td>
		</tr>	
		@endforeach
	</table>
	<a href="{{url('myAdmin/courses/add')}}">Add Course</a>

@endsection