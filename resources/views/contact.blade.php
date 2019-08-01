@extends('master')

@section('title', 'Contact')

@section('content')

        <div class="container">
            <h1 class="display-4 text-center">Contact Form</h1>
            <div class="form-row">
            	<div class="col-6 offset-3">
            		<form action="#">
	            		<div class="form-group">
	            			<label for="username">Username</label>
	            			<input type="text" name="username" id="username" class="form-control">
	            		</div>
	            		<div class="form-group">
	            			<label for="password">Password</label>
	            			<input type="password" name="password" id="password" class="form-control">
	            		</div>
	            		<input type="submit" value="Submit" class="btn btn-primary">
	            	</form>
            	</div>
            </div>
        </div>

@endsection
