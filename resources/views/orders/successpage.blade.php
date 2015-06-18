@extends('base.main')

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
<section class="container-fluid main-content" id="order-confirmation-content">
	<div class="container">
		<div class="title-heading">
			<h2>Thank you for chosing us.</h2>
			<p class="alert alert-success">
				Thank you. Your payment was successful and your order is now being processed.
			</p>
		</div>

	</div>
</section>
@endsection

