@extends('admin.index')
@section('content')
	<!-- php variable,{$level->id}, can be used inside double quotes but not inside single quote -->
	{!!Form::open(array('url'=>"myAdmin/levels/edit/{$level->id}",'method'=>'post'))!!} 
	<fieldset>
	        <div>
	            Level Name:<input placeholder="Name" name="name" type="text" value="{{$level->name}}" autofocus>
	        </div>
	        
	        <!-- Change this to a button or input when using this as a form -->
	        <button>Update</button> 
	        <!-- Button checks Form first, then url, then method, if there is no url n method
	         then Form is sent to same url with get method -->
	</fieldset>
	{!!Form::close()!!}
@endsection