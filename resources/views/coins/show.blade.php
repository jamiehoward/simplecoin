@extends('layouts.app')


@section('content')

<div class="container">
	<h1>{{$coin->name}} <small>({{ $coin->abbreviation }})</small></h1>

	<h3>Your wallets 
		<form method="POST" action="/coins/{{$coin->id}}/wallets">
			{{csrf_field()}}
			<input type="submit" class="btn btn-primary" value="Create new wallet"/>
		</form>
	</h3>

	<div class="col-lg-12">
		<ul class="list-unstyled">
		@forelse (\Auth::user()->wallets()->where('coin_id', $coin->id)->get() as $wallet)
			<li>{{ $wallet->hash }}</li>
		@empty
			<h3 class="text-muted">You don't have any wallets yet. Add one!</h3>
		@endforelse
		</ul>
	</div>
</div>

@endsection