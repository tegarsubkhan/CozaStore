@extends('component.base')

@section('container')

	@include('component.slider')

	<!-- Product -->
	<section class="bg0 p-t-50 p-b-140" id="product-section">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>
					@foreach($kategoris as $kategori)
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ request()->kategori == $kategori->id ? 'how-active1' : '' }}" data-filter=".{{ 'category'.$kategori->id }}">
							{{ $kategori->nama_kategori }}
						</button>
					@endforeach
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				@foreach($produks as $produk)
					@php
						$categories = explode(',',$produk->kategori_id);
						$classCategory = '';
						foreach($categories as $category){
							$classCategory .= 'category'.$category.' ';
						}
					@endphp
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $classCategory }}">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('uploads/'.$produk->gambar) }}" alt="IMG-PRODUCT">
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{ url('produk/'.$produk->id) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $produk->nama_barang }}
								</a>

								<span class="stext-105 cl3">
									IDR {{ $produk->harga }}
								</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				{{ $produks->links() }}
			</div>
		</div>
	</section>

@endsection
