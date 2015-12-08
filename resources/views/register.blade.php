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
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Pages</a> <span class="divider">/</span></li>
            <li class="active">Registration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->       


  <section id="registration-page" class="container">
    <!-- <form class="center" action='' method="POST"> -->
      {!!Form::open(array('url'=>'register','method'=>'post', 'class'=>'center'))!!}
      <fieldset class="registration-form">
        <div class="control-group">
          <!-- First name -->
          <div class="controls">
            <input type="text" name="fname" placeholder="First name" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Middle name -->
          <div class="controls">
            <input type="text" name="mname" placeholder="Middle name" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Last name -->
          <div class="controls">
            <input type="text" name="lname" placeholder="Last name" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Gender name -->
          <div class="controls">
          	Gender:<input type="radio" name="gender" value="m" class="input-xlarge">Male
          	<input type="radio" name="gender" value="f" class="input-xlarge">Female
            <input type="radio" name="gender" value="o" class="input-xlarge">Other
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
          <!-- User Type -->
          <div class="controls">
            <select name="usertype">
            	<option value="1">Student</option>
            	<option value="2">Parent</option>
            	<option value="3">Teacher</option>
            	<option value="4">Organization</option>
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