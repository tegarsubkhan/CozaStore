@extends('component.base')

@section('container')

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-150 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{ asset('uploads/'.$produk->gambar) }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ asset('uploads/'.$produk->gambar) }}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('uploads/'.$produk->gambar) }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						@include('component.alert')

						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{ $produk->nama_barang }}
						</h4>

						<span class="mtext-106 cl2">
							IDR {{ $produk->harga }}
						</span>

						<p class="stext-102 cl3 p-t-23">
							{{ $produk->deskripsi }}
						</p>

						<!--  -->
						<div class="p-t-33">
							<form action="{{ url('cart/'.$produk->id) }}" method="post">
								@csrf
								@method('put')
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				Categories:
				@foreach($kategoris as $key => $kategori)
					{{ $kategori->nama_kategori.($key+1 == sizeof($kategoris) ? '' : ', ') }}
				@endforeach
			</span>
		</div>
	</section>
@endsection
