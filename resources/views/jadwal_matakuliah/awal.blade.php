@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Jadwal Matakuliah</strong>
		<a href="{{ url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>jadwal_matakuliah</a>
			<div class="clearfix"></div>
		</div>
		<table class="table">
				<thead>
					<tr>
						<td align="center"><b>No.</b></td>
						<td align="center"><b>ID jadwal_matakuliah</b></td>
						<td align="center"><b>ID Ruangan</b></td>
						<td align="center"><b>ID Dosen Matakuliah</b></td>
					</tr>
				</thead>
				<tbody>
					<?php $x=1;?>
					@foreach($semuajadwal as $jadwal_matakuliah)
						<tr>
							<td align="center">{{ $x++ }}</td>
							<td align="center">{{  $jadwal_matakuliah->mahasiswa_id or 'mahasiswa kosong'}}</td>
							<td align="center">{{  $jadwal_matakuliah->ruangan_id or 'ruangan kosong'}}</td>
							<td align="center">{{  $jadwal_matakuliah->dosen_matakuliah_id or 'dosen kosong'}}</td>
							<td>
								<div class="btn-group" role="group">
							<a href="{{url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top"
							title="Ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{url('jadwal_matakuliah/lihat/'.$jadwal_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top"
							title="Lihat"><i class="fa fa-eye"></i></a>
							<a href="{{url('jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top"
							title="Hapus"><i class="fa fa-remove"></i></a>
								</div>
							</td>
						</tr>
						@endforeach
				</tbody>
		</table>
	</div>
@stop	