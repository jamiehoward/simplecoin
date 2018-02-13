@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Create a new wallet</h1>

	<div class="col-lg-12">
		<form class="form" method="POST" action="/coins">

			<div class="form-group">
				<label class="form-label" for="name">Coin name</label>
				<input type="text" name="name" class="form-control" placeholer="Coin name" />
			</div>

			<div class="form-group">
				<label class="form-label" for="name">Abbreviaton</label>
				<input type="text" maxlength="4" name="abbreviation" class="form-control" placeholer="e.g. ETH" />
			</div>

			<input type="hidden" name="coin_id" value="{{$coin->id}}" />

			{{csrf_field()}}

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Save" />
			</div>
	</div>
</div>

@endsection