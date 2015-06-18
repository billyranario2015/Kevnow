@extends('base.main')
@section('content')
<section class="container-fluid main-content" id="home-content">
	<div class="container">
		<div class="row heading-title">
			<h1>$5 fast coffee delivery</h1>
			<h3>choose your city</h3>
		</div>
		<div class="row city-options">
			<div class="dropdown">
				<a href="#" class="btn btn-default dropdown-toggle" type="button" id="city-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					Cities
				</a>
				<ul class="dropdown-menu" aria-labelledby="city-dropdown">
					<li><a href="city/1">Houston</a></li>
					<li><a href="city/2">Austin</a></li>
					<li><a href="city/3">Dallas</a></li>
				</ul>
			</div>	
		</div>		
	</div>
</section>
@endsection