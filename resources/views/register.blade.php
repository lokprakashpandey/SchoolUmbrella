@extends('index')
@section('content')
	  <section class="title">
	    <div class="container">
	      <div class="row-fluid">
	        <div class="span6">
	          <h1>Registration</h1>
	        </div>
	        <div class="span6">
	          <ul class="breadcrumb pull-right">
	            <li><a href="{{url()}}">Home</a> <span class="divider">/</span></li>
	            <li class="active">Registration</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- / .title -->       


	  <section id="registration-page" class="container">
	    <!-- <form class="center" action='' method="POST"> -->
	    {!!Form::open(array('url'=>'register','method'=>'post','class'=>'center'))!!}
	      <fieldset class="registration-form">
	      	
	      	<div class="control-group">
	          <!-- Firstname -->
	          <div class="controls">
	            <input type="text"  name="fname" placeholder="Firstname" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Middlename -->
	          <div class="controls">
	            <input type="text"  name="mname" placeholder="Middlename" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Lastname -->
	          <div class="controls">
	            <input type="text"  name="lname" placeholder="Lastname" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Username -->
	          <div class="controls">
	            <input type="text" name="username" placeholder="Username" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- E-mail -->
	          <div class="controls">
	            <input type="text" name="email" placeholder="E-mail" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Gender -->
	          <div class="controls">
	            <label> <input type="radio" value="f" name="gender" class="input-xlarge">Female </label>
	            <label> <input type="radio" value="m" name="gender" class="input-xlarge">Male </label>
	            <label> <input type="radio" value="o" name="gender" class="input-xlarge">Others </label>
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Member Type-->
	          <div class="controls">
	          <label>User Type</label>
	            <select name="user_typeId" class="input-xlarge"> 
	            	<option value="2">Student</option>
	            	<option value="3">Parent</option>
	            	<option value="4">Teacher</option>
	            	<option value="5">Organization</option>
	            </select> 
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Password-->
	          <div class="controls">
	            <input type="password" name="password" placeholder="Password" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Password -->
	          <div class="controls">
	            <input type="password" name="password_confirm" placeholder="Password (Confirm)" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Button -->
	          <div class="controls">
	            <button class="btn btn-success btn-large btn-block">Register</button>
	          </div>
	        </div>
	      </fieldset>
	    <!-- </form> -->
	    {!!Form::close()!!}
	  </section>
	  <!-- /#registration-page -->
@endsection