@extends('base.main')

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('content')
<section class="container-fluid main-content" id="coffee-types-content">
	<div class="container">
		<div class="title-heading">
			<h2>Choose type of Coffee:</h2>
		</div>
		<div class="coffee-options">
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Filter Coffee</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Americano</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Espresso</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Double Espresso</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Cappuccino</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Cafe Latte</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Macchiato</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
			<div class="col-md-3 coffee-description">
				<div class="coffee-img">
					<img src="{{ asset('img/icons/coffee.png') }}">
				</div>
				<div class="price-details">
					<p class="name">Caramel Macchiato</p>
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn-size btn btn-default" value="Small">Small</button>
						<button type="button" class="btn-size btn btn-info" value="Medium">Medium</button>
						<button type="button" class="btn-size btn btn-primary" value="Large">Large</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
	$( '.price-details' ).delegate( '.btn-size' , 'click' , function()  {
		var base_url = window.location.origin + '/';
		var coffee = {
			'size' : $( this ).val(),
			'name' : $( this ).parent().siblings().text()
		}

		swal( {   
			title:"Order added",   
			text: "You have selected " + coffee.size + " " + coffee.name,   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Place Order",   
			closeOnConfirm: false }, 
			function() {   
				swal("Successfully added!", "Your order has been added." , "success"); 
				setTimeout(function() {
					window.location = base_url + "order/" + coffee.name + "/" + coffee.size ;
				}, 2000);
			} );
		
	} )
</script>
@endsection
