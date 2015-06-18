@extends('base.main')

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
<section class="container-fluid main-content" id="order-confirmation-content">
	<div class="container">
		<div class="title-heading">
			<h2>Payment Process</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="order-panel">
					<h5>Order Details</h5>
					<p>
						<strong>TOTAL:</strong>
						<strong class="pull-right">&pound;26</strong>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="order-panel">
					<h5>Billing Details</h5>
					<div class="form-group">
						<label>Card Type</label>
						<div class="btn-group" role="group" aria-label="...">
							<button type="button" class="btn btn-default">
							<img src="{{asset( 'img/icons/visa.png' )}}">
							</button>
							<button type="button" class="btn btn-default">
							<img src="{{asset( 'img/icons/mastercard.png' )}}">
							</button>
							<button type="button" class="btn btn-default">
							<img src="{{asset( 'img/icons/maestro.png' )}}">
							</button>
							<button type="button" class="btn btn-default">
							<img src="{{asset( 'img/icons/americanexpress.png' )}}">
							</button>
						</div>
					</div>
					<div class="form-group">
						<label>Card Number</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Card Number</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Name on card</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Expiry Date</label>
						<input type="date" class="form-control">
					</div>
					<div class="form-group">
						<label>CVV</label>
						<input type="text" class="form-control">
					</div>			
				</div>
			</div>
			<div class="col-md-4">
				<div class="order-panel">
					<h5>Delivery Address</h5>
					<p><b>Name:</b> John Doe</p>	
					<p><b>Phone:</b> 1238820</p>	
					<p><b>Address:</b> Some Street </p>	
					<p><b>City:</b> Some City </p>	
					<p><b>State:</b> Some States </p>	
					<p><b>Zip Code:</b> Some Zip Code </p>
					<div class="place-order-btn">
						<a href="/order/success">
							<button class="btn btn-success placed-order-btn">
								Place Order
							</button>							
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

