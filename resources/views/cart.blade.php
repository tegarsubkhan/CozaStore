@extends('component.base')

@section('container')

	<!-- Shoping Cart -->
	<form class="bg0 p-t-150 p-b-85" action="{{ url('/cart/checkout') }}" method="post">
		@csrf
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

								@if($carts->count() == 0)
									<tr>
										<th colspan="5" class="p-5">No data cart.</th>
									</tr>
								@endif
								@php
									$total_harga = 0;
								@endphp
								@foreach($carts as $key => $cart)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ asset('uploads/'.$cart->barang->gambar) }}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{ $cart->barang->nama_barang }}</td>
									<td class="column-3">Rp.{{ $cart->barang->harga }}</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty[{{ $cart->id }}]" value="{{ $cart->qty }}">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">Rp.{{ $cart->barang->harga*$cart->qty }}</td>
								</tr>
								@php
									$total_harga += $cart->qty * $cart->barang->harga;
								@endphp
								@endforeach
							</table>
						</div>
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 btnBack">
								<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back to Shopping
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t p-t-27 p-b-33">
							@include('component.alert')
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Rp.{{ $total_harga }}
								</span>
							</div>
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection

@section('js')
	<script>
		$(document).ready(function(){
			$('.btnBack').on('click', function(){
				window.location.replace('{{ url('/produk') }}');
			})
		});
	</script>
@endsection
