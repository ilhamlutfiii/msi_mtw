@extends('main')

@section('title', 'Tambah Inventaris')

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="col-sm-4">
			<div class="page-header float-left">
				<div class="page-title">
					<h1>Pinjam Inventaris</h1>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="page-header float-right">
				<div class="page-title">
					<ol class="breadcrumb text-right">
						<li><a href="{{  url('/inventaris') }}">Pinjam Inventaris</a></li>
						<li><a href="{{  url('/inventaris/tambah_inventaris') }}">Tambah Pinjam Inventaris</a></li>					
					</ol>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<br/>
	<br/>
	
 
	<div class="card-body card-block">
		<br/>
		<form action="{{  url('/inventaris/store') }}" method="post" class="">
			{{ csrf_field() }}
			<div class="form-group">
            <label class="form-control-label">Nama User :</label>
        		<select name="user_id" id="user" class="form-control selectuser">
            		<option value="0">Pilih User...</option>
            		@foreach($users as $u)
                	<option value="{{ $u->user_id }} ">{{ $u->user_nama }}</option>
            		@endforeach
        		</select>
    		</div>
			<div class="form-group">
        	<label class="form-control-label">ID Perangkat :</label>
        		<select name="komp_id" id="komputer" class="form-control selectkomp">
            		<option value="0">Pilih ID Perangkat...</option>
            		@foreach($komputers as $k)
                	<option value="{{ $k->komp_id }} ">{{ $k->id_perangkat }}</option>
            		@endforeach
        		</select>
    		</div>

			<div class="form-group"><label class="form-control-label">Tanggal Pinjam :</label><input type="date" name="tgl_pinjam" class="form-control" ></div>

			<button type="submit" class="btn btn-primary btn-sm">
				<i class="fa fa-dot-circle-o"></i> Submit
			</button>
			<button type="reset" class="btn btn-danger btn-sm">
				<i class="fa fa-ban"></i> Reset
			</button>
		</form>
	</div>
@endsection