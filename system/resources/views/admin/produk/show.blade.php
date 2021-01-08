@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						DETAIL DATA PRODUK
					</div>
					<div class="card-body">
						<h3>{{$produk->nama}}</h3>
						<hr>
						<p>
							{{$produk->harga}} |
							Stok : {{$produk->stock}} |
							Berat : {{$produk->berat}} gr |
							Seller : {{$produk->seller->nama}}
						</p>
						<p>
							Tanggal Produksi : {{$produk->created_at->diffForHumans()}}
							<br>
							Update Produksi : {{$produk->updated_at->diffForHumans()}}
						</p>
						<p>
							{!! nl2br($produk->deskripsi)!!}
						</p>
						<p>
							<img src="{{url("public/$produk->foto")}}" alt="">
						</p>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection