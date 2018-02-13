@extends('layouts.app')


@section('content')
<div class="container">
	<h1>Your coins</h1>

	<div class="col-lg-12">
		<ul class="list-unstyled">
		@forelse (\Auth::user()->coins as $coin)
			<li>{{ $coin->name }} <small>({{ $coin->abbreviation }})</small></li>
		@empty
			<h3 class="text-muted">You don't have any coins yet. Add one!</h3>
		@endforelse
		</ul>
	</div>
</div>

@endsection