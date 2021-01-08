@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data User
				</div>
				<div class="card-body">
					<form action="{{url('admin/user')}}" method="post" enctype="multipart/form-data">
					@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Jenis Kelamin</label>
							<input type="text" name="jenis_kelamin" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="" class="control-label">Foto</label>
								<input type="file" name="foto" accept=".png" class="form-control">
							</div>	
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