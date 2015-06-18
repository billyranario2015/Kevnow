@extends('base.main')

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
<section class="container-fluid main-content" id="order-confirmation-content">
	<div class="container">
		<div class="title-heading">
			<h2>Order Confirmation</h2>
		</div>
		<div class="alert alert-info message">
			<p>Please review your order and proceed to payment section if order is correct.</p>
		</div>
		<div class="order-list">
			<table class="table table-striped table-bordered table-hovered">
				<thead>
					<th>Name of Order</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>Amount</th>
				</thead>
				<tbody>
					<tr>
						<td>Americano</td>
						<td>Coffee</td>
						<td>1</td>
						<td>&pound;1.05 </td>
					</tr>
					<tr>
						<td>Aero Caramel</td>
						<td>Sweets</td>
						<td>1</td>
						<td>&pound;1.08 </td>
					</tr>
					<tr>
						<td>Donut</td>
						<td>Sweets</td>
						<td>1</td>
						<td>&pound;1.59 </td>
					</tr>
					<tr>
						<td>Raspberry</td>
						<td>Sweets</td>
						<td>1</td>
						<td>&pound;1.62 </td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="proceed" style="text-align: right;margin: 20px 0">
			<a href="/order/payment">
				<button class="btn btn-success">Continue</button>
			</a>
		</div>
	</div>
</section>
@endsection

