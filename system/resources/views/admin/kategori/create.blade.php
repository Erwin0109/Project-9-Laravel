@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						TAMBAH DATA KATEGORI
					</div>
					<div class="card-body">
						<form action="{{url('admin/kategori')}}" method="post">
						@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<button class="btn btn-dark float-right">
								<i class="fa fa-save"> Simpan</i>
							</button>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection