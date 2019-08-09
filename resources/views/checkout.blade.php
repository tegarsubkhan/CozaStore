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
							Send To
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" name="nama" placeholder="Receiver Name" required value="{{ @$delivery->nama ? @$delivery->nama : auth()->user()->nama }}">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="email" name="email" placeholder="Email Address" required value="{{ @$delivery->email ? @$delivery->email : auth()->user()->email }}">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" name="no_telp" placeholder="Phone Number" required value="{{ @$delivery->no_telp }}">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" name="kode_pos" placeholder="Post Code" value="{{ @$delivery->kode_pos }}">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="alamat" placeholder="Address">{{ @$delivery->alamat }}</textarea>
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
									Rp.{{ $totalPayment }}
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
