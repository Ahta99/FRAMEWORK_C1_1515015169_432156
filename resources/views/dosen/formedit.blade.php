<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
		<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="nim">NIP</label>
			<div class="col-sm-10">
			{!! Form::text('nip',null,['class'=>'form-control','id'=>'nip','placeholder'=>"NIP"]) !!}
			</div>
	</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" id="alamat">Alamat</label>
			<div class="col-sm-10">
			{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
			</div>
		</div>