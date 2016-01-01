@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=> 'myAdmin/courses/add','method' => 'post'))!!}
		<fieldset>
		    <div>
		    <label>Course Name:</label>
		        <input placeholder="Name" name="name" type="text" autofocus>
		    </div>
		    
		    <div>
		       <label>Affiliate</label>
		        <select name="affiliateId" class="input-xlarge"> 
		        	<option>Select Affiliate</option>
		        	@foreach($affiliates as $affiliate)
		        	 	<option value="{{$affiliate->id}}">{{$affiliate->name}}</option>
		        	@endforeach
		        </select>
		    </div> 

		    <div>
		       <label>Stream</label>
		        <select name="streamId" class="input-xlarge"> 
		        	<option>Select Stream</option>
		        	@foreach($streams as $stream)
		        	 	<option value="{{$stream->id}}">{{$stream->name}}</option>
		        	@endforeach
		        </select>
		    </div>

		    <div>
		       <label>Level</label>
		        <select name="levelId" class="input-xlarge"> 
		        	<option>Select Level</option>
		        	@foreach($levels as $level)
		        	 	<option value="{{$level->id}}">{{$level->name}}</option>
		        	@endforeach
		        </select>
		    </div>
		    
		    <!-- Change this to a button or input when using this as a form -->
		    <button>Add</button> 
		    <!-- Button checks Form first, then url, then method, if there is no url n method
		     then Form is sent to same url with get method -->
		</fieldset>
	{!!Form::close()!!}
@endsection