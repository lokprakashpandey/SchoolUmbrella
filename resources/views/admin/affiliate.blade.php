@extends('admin.index')
@section('content')

	<table>
		<tr>
			<td>S.N.</td>
			<td>Name</td>
		</tr>
		@foreach($affiliates as $affiliate)
			<tr>
				<td>{{$affiliate->id}}</td>
				<td>{{$affiliate->name}}</td>
			</tr>
		@endforeach	
	</table>
	<a href="{{url('myAdmin/affiliates/add')}}">Add Affiliate</a>
@endsection