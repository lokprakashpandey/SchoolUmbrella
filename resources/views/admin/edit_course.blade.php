@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=> "myAdmin/courses/edit/{$course->id}",'method' => 'post'))!!}
		<fieldset>
		    <div>
		    <label>Course Name:</label>
		        <input placeholder="Name" name="name" type="text" value="{{$course->name}}" autofocus>
		    </div>
		    
		    <div>
		       <label>Affiliate</label>
		        <select name="affiliateId" class="input-xlarge"> 
		        	<option>Select Affiliate</option>
		        	@foreach($affiliates as $affiliate)
		        	 	<option value="{{$affiliate->id}}" <?php if($affiliate->id == $course->affiliateId) {echo 'selected';}?>>{{$affiliate->name}}</option>
		        	@endforeach
		        </select>
		    </div> 

		    <div>
		       <label>Stream</label>
		        <select name="streamId" class="input-xlarge"> 
		        	<option>Select Stream</option>
		        	@foreach($streams as $stream)
		        	 	<option value="{{$stream->id}}" <?php if($stream->id == $course->streamId) {echo 'selected';}?> >{{$stream->name}}</option>
		        	@endforeach
		        </select>
		    </div>

		    <div>
		       <label>Level</label>
		        <select name="levelId" class="input-xlarge"> 
		        	<option>Select Level</option>
		        	@foreach($levels as $level)
		        	 	<option value="{{$level->id}}" <?php if($level->id == $course->levelId) {echo 'selected';}?> >{{$level->name}}</option>
		        	@endforeach
		        </select>
		    </div>
		    <div>
		       <label>Couse Type</label>
		        <select name="courseType" class="input-xlarge"> 
		        	<option>Select Type</option>
		        	<option <?php if($course->courseType == 's'){echo 'selected';} ?> value="s">Semester</option>
		        	<option <?php if($course->courseType == 'y'){echo 'selected';} ?> value="y">Year</option>
		        </select>
		    </div>
		    <div>
		    <label>Course Duration</label>
		        <input placeholder="Duration" name="duration" value="{{$course->duration}}" type="number">
		    </div>
		    
		    <!-- Change this to a button or input when using this as a form -->
		    <button>Update</button> 
		    <!-- Button checks Form first, then url, then method, if there is no url n method
		     then Form is sent to same url with get method -->
		</fieldset>
	{!!Form::close()!!}
@endsection