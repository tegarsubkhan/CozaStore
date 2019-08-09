@extends('component.base')

@section('container')

	<!-- Shoping Cart -->
	<form class="bg0 p-t-150 p-b-85" action="{{ url('/checkout') }}" method="post">
		@csrf
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<h4 class="mtext-105 cl2 p-b-30">
							Payment Information
						</h4>
						<div class="row">
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/mandiri.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account 1683238 12321</h5>
 									</div>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/jenius.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account $cozastore</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/bca.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account 123212 18721</h5>
									</div>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/bri.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account 34341122234 5423</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/bni.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account 123 12893092130 </h5>
									</div>
								</div>
							</div>
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="{{ asset('asset/images/ovo.png') }}" alt="bank logo" class="img-thumbnail border-0 mb-3 col-7">
										<h5 class="text-center">no. account 081299281192</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total Order
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
									Rp.{{ $transaksi->total_harga }}
								</span>
							</div>
						</div>

						<a href="{{ url('order') }}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							See My Orders
						</a>
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
