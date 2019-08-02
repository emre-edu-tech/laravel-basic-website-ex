@extends('master')
@section('content')

<div class="container my-5">
	<form action="{{ action('WeatherController@index') }}" method="POST">
		@csrf
		<div class="input-group">
			<input type="text" name="search" id="search" placeholder="enter search location" class="form-control" value="{{ old('search') }}" {{ $errors->has('search') ? 'is-invalid' : '' }}>
			<div class="append-input-group">
				<input type="submit" value="submit" class="btn btn-primary">
			</div>
			@if($errors->has('search'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('search') }}</strong>
                </div>
            @endif
		</div>
	</form>
	<div class="links">
		{{ $forecast->city }} - {{ $forecast->state }} - {{ $forecast->country }}
		<br>
		{{ $forecast->latitude }} - {{ $forecast->longitude }}
		<br>
		@if(count($forecast->forecast))
			<table class="table">
				<thead>
					<th scope="col"></th>
					<th scope="col">Weather</th>
					<th scope="col">Weekday</th>
					<th scope="col">Temperature</th>
				</thead>
				<tbody>
					@foreach($forecast->forecast as $f)
						<tr>
							<td><img src="{{ $f->iconLink }}"></td>
							<td>{{ $f->description }}</td>
							<td>{{ $f->weekday }}</td>
							<td>{{ $f->temperature }}</td>
						</tr>
					@endforeach
					<tr></tr>
				</tbody>
			</table>
		@else
			<p>Sorry, no weather forecast</p>
		@endif
	</div>	
</div>
	
@endsection