@extends('index')
@section('content')
		
	  <section class="title">
	    <div class="container">
	      <div class="row-fluid">
	        <div class="span6">
	          <h1>Login</h1>
	        </div>
	        <div class="span6">
	          <ul class="breadcrumb pull-right">
	            <li><a href="{{url()}}">Home</a> <span class="divider">/</span></li>
	            <li class="active">Login</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- / .title -->       


	  <section id="registration-page" class="container">

	  @if(session('error_message'))
	  	{{session('error_message')}}
	  @endif

	    <!-- <form class="center" action='' method="POST"> -->
	    {!!Form::open(array('url'=>'login','method'=>'post','class'=>'center'))!!}
	      <fieldset class="registration-form">
	      	
	        
	        <div class="control-group">
	          <!-- Username -->
	          <div class="controls">
	            <input type="text" name="username" placeholder="Username" class="input-xlarge">
	          </div>
	        </div>

	       

	        <div class="control-group">
	          <!-- Password-->
	          <div class="controls">
	            <input type="password" name="password" placeholder="Password" class="input-xlarge">
	          </div>
	        </div>

	        

	        <div class="control-group">
	          <!-- Button -->
	          <div class="controls">
	            <button class="btn btn-success btn-large btn-block">Login</button>
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Button -->
	          <div class="controls">
	            <a href="{{url('register')}}" class="btn btn-success btn-large btn-block">Register</a>
	          </div>
	        </div>

	      </fieldset>
	    <!-- </form> -->
	    {!!Form::close()!!}
	  </section>
	  <!-- /#registration-page -->
@endsection