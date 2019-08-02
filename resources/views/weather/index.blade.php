<form action="{{ route(weather.index) }}"></form>
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