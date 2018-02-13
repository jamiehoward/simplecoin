@extends('layouts.app')


@section('content')

<div class="container">
	<h1>Your coins <a class="btn btn-primary" href="/coins/create">&plus; Create new coin</a></h1>

	<div class="col-lg-12">

		<ul class="list-unstyled">
		@forelse (\Auth::user()->coins as $coin)
			<li>
				<a href="/coins/{{ $coin->id }}">{{ $coin->name }} <small>({{ $coin->abbreviation }})</small></a>
			</li>
		@empty
			<h3 class="text-muted">You don't have any coins yet. Add one!</h3>
		@endforelse
		</ul>
	</div>
</div>

@endsection