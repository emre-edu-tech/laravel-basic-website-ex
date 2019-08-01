@extends('master')

@section('title', 'Create Ticket')

@section('content')
	<div class="container col-md-8 col-md-offset-2 mt-5">
		<h2 class="text-center">Submit a new ticket</h2>
		<form action="{{ route('tickets.store') }}" method="POST">
			<div class="form-row">
				<div class="col-md">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" placeholder="Enter title" class="form-control">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="content" rows="4" class="form-control" placeholder="Enter content"></textarea>
						<small class="text-muted">Feel free to ask us any question</small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
						<input type="submit" class="btn btn-secondary" value="Cancel">
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection