@extends('main')

@section('title', 'Jabatan')

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Jabatan</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li><a href="jabatan">Jabatan</a></li>
						<li class="active">Data Jabatan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<div class="content mt-3">
		<div class="animated fadeIn">	
				<div class="d-flex justify-content-between mb-3">
					<a href="{{ route('tambah_jabatan') }}" class="btn btn-info"> + Tambah Jabatan Baru</a>
					<form action="{{ route('search_jabatan') }}" method="GET" class="form-inline">
						<div class="input-group">
							<input type="text" name="keyword" class="form-control" placeholder="Cari Jabatan...">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
							</div>
						</div>
					</form>
				</div>
			<table border="1" class="table table-striped table-bordered">
				<tr>
					<th>Id</th>
					<th>Nama Jabatan</th>
					<th>Opsi</th>
				</tr>
				@foreach($jabatan as $j)
				<tr>
					<td>{{ $j->jabatan_id }}</td>
					<td>{{ $j->jabatan_name }}</td>
					<td>
						<a href="../jabatan/edit/{{ $j->jabatan_id }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
						|
						<a href="../jabatan/hapus/{{ $j->jabatan_id }}" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div><!-- .content -->
    </div>
@endsection