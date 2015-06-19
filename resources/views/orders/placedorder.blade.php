@extends('base.main')

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('content')
<section class="container-fluid main-content" id="placed-order-content">
	<div class="container">
		<div class="title-heading">
			<h2>Add an order:</h2>
		</div>		
		<div class="row order-wrapper">
			<div class="col-md-8 placed-order-info">
				<div class="info-box">
					<div class="col-md-2 coffee-logo">
						<img src="{{ asset( 'img/icons/coffee.png' ) }}">
					</div>
					<div class="col-md-10 info">
						<p class="pull-right">
							<a href="#">
								<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-circle-arrow-left"></i> Cancel</button>
							</a>
						</p>					
						<p><label>Coffee Name:</label>&nbsp;{{ $coffeeInfo['name'] }}</p>	
						<p><label>Size:</label>&nbsp;{{ $coffeeInfo['size'] }}</p>
						<p><label>Price:</label>&nbsp; &pound;<span id="price">1.05</span></p>
					</div>					
				</div>
				<div class="extra-selections">
					<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#sweets" aria-controls="sweets" role="tab" data-toggle="tab">Sweets</a></li>
							<li role="presentation"><a href="#biscuits" aria-controls="biscuits" role="tab" data-toggle="tab">Biscuits</a></li>
						</ul>
						<div class="tab-content" id="product-tablists">
							<div role="tabpanel" class="tab-pane sweets-biscuits active" id="sweets">
								<ul class="list-unstyled">
									<li>Aero Caramel
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.08 &nbsp;
												<button value="1.08" name="Aero Caramel" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
									<li>Donut
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.59 &nbsp;
												<button value="1.59" name="Donut" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
									<li>Peach Melba
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.44 &nbsp;
												<button value="1.44" name="Peach Melba" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
									<li>Raspberry
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.62 &nbsp;
												<button value="1.62" name="Raspberry" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane sweets-biscuits" id="biscuits">
								<ul class="list-unstyled">
									<li>Animal cracker
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.59 &nbsp;
												<button value="1.59" name="Animal cracker" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
									<li>Berger Cookie
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.44 &nbsp;
												<button value="1.44" name="Berger Cookie" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
									<li>Almond biscuit
										<ul class="list-unstyled pull-right">
											<li>
												&pound;1.08 &nbsp;
												<button value="1.08" name="Almond biscuit" class="btn btn-success btn-add-order"><i class="glyphicon glyphicon-plus"></i></button> 
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>												
					</div> 
				</div>
			</div>
			<div class="col-md-4 order-panel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Your Order</h4>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled" id="placed-orders">

						</ul>
					</div>
					<div class="panel-footer">
						<p><label>Subtotal</label></p>
						<p>Delivery Fee: <strong class="pull-right">&pound;2.00</strong></p>
						<h3>Total <span class="pull-right">&pound;<span class="total-amount"></span></span></h3>
						<div class="button">
							<a href="{{ url( '/order/confirmation' ) }}">
								<button class="btn btn-warning" id="btn-submit-order"> <i class="glyphicon glyphicon-shopping-cart"></i> Go to Checkout</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" id="coffee-name" value="{{ $coffeeInfo['name'] }}">
</section>
@endsection

@section('scripts')
<script type="text/javascript">
	$( document ).ready( function() {
		var coffeeName = $( '#coffee-name' ).val();
		var price = parseFloat( $( '#price' ).text() );
		var totalAmount = 0;
		var appendFirstOrder = 	'<li>' +
									'<button value="'+ price +'" name="'+ coffeeName +'" class="btn btn-default btn-remove-order"><i class="glyphicon glyphicon-minus"></i></button>' +
									coffeeName +
									'<span class="pull-right">&pound;' + price + '</span>' +
								'</li>';
		$( '#placed-orders' ).append(appendFirstOrder);
		getTotal( price , '+' );

		// Add clicked order
		$( 'body' ).delegate( '.btn-add-order' , 'click' , function() {
			var getPriceValue = parseFloat( $( this ).attr( 'value' ) );
			var getOrderName  = $( this ).attr( 'name' );
			var appendAddedOrder = 	'<li>' +
									'<button value="'+ getPriceValue +'" name="'+ getOrderName +'" class="btn btn-default btn-remove-order"><i class="glyphicon glyphicon-minus"></i></button>' +
									getOrderName +
									'<span class="pull-right">&pound;' + getPriceValue + '</span>' +
								'</li>';
			$( '#placed-orders' ).append( appendAddedOrder );
			getTotal( getPriceValue , '+' );
		} );

		// Cancel single order
		 $( 'body' ).delegate( '.btn-remove-order' , 'click' , function(){
		 	var priceValue = parseFloat( $( this ).attr( 'value' ) );
		 	getTotal( priceValue , '-' );
		 	$( this ).parent().remove();
		 } );

		 // Go to confirmation
		 // $( '#btn-submit-order' ).click( function() {

		 // } );

		// Add/Subtract all total orders
		function getTotal( orderValue , operation ) {
			var total = 0;
			if ( operation == '+' ) {
				total = totalAmount + orderValue;
			} else if( operation == '-' ) {
				total = totalAmount - orderValue;
			}
			totalAmount = total;
			$( '.total-amount' ).text( total.toFixed(2) );
		}
	} );
</script>
@endsection