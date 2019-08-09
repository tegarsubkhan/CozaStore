@extends('component.base')

@section('container')
<!-- Shoping Cart -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 m-t-100 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">No. Inv</th>
								<th>Name</th>
								<th>Address</th>
								<th>Detail Order</th>
								<th>Total</th>
								<th>Status</th>
								<th></th>
							</tr>

							@if($orders->count() == 0)
								<tr>
									<th colspan="7" class="p-5">No data order.</th>
								</tr>
							@endif
							@foreach($orders as $key => $order)
								<tr>
									<td class="column-1"><strong>INV-{{ $order->id }}</strong></td>
									<td>{{ $order->delivery->nama }}</td>
									<td>{{ $order->delivery->alamat }}</td>
									<td class="p-t-15">
										<ol>
											@foreach($order->detail as $detail)
												<li>{{ @$detail->barang->nama_barang }} ({{ $detail->qty }} pcs)</li>
											@endforeach
										</ol>
									</td>
									<td>Rp.{{ $order->total_harga }}</td>
									<td>
                                        <span class="d-block">
                                            {{ app('order_status')['name'][$order->status] }}
                                        </span>
									</td>
									<td>
										@if($order->status == 1)
											<a href="{{ url('/payment-info/'.$order->id) }}" class="btn btn-primary btn-sm mt-2">Pay</a>
										@endif
									</td>
								</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
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
