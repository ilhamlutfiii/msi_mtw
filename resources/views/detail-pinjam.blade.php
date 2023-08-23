@extends('main')

@section('title', 'Pinjam Sementara')

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Pinjam Sementara</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li><a href="pinjam">Pinjam Sementara</a></li>
						<li class="active">Data Pinjam Sementara</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('content')
	<div class="content mt-3">
		<div class="animated fadeIn">	
			<table border="80" class="table table-striped table-bordered">
            @foreach($pinjam as $p)
                        <tr>
                            <td><strong>ID Pinjam</strong><td>{{ $p->pinjam_id }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>Nama User</strong><td> {{ $p->user_nama }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>NID User</strong><td> {{ $p->user_nid }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>ID Perangkat</strong><td> {{ $p->id_perangkat }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Pinjam</strong><td> {{ $p->tgl_pinjam }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Kembali</strong><td> {{ $p->tgl_kembali }}</td></td>
                        </tr>
                        <tr>
                            <td><strong>No Tiket</strong><td> R-{{ $p->no_tiket }}</td></td>
                        </tr>                        
                        <tr>
                            <td>
                                <a href="../edit/{{ $p->pinjam_id }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                <a href="../hapus/{{ $p->pinjam_id }}" class="btn btn-danger"><i class="fa fa-recycle"></i> Kembalikan</a>
                            </td>
                        </tr>
                    @endforeach
			</table>
		</div><!-- .content -->
    </div>
@endsection