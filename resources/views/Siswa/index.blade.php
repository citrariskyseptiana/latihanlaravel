@extends('layouts.master')

@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		
		@endif
		<br>
		<br>
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa</h1>
			</div>

				<div class="col-6">
					<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data
					</button>
				</div>
		
		<table class="table table-hover table-striped">
	<tr style="text-align: center;">
		<th>NAMA LENGKAP</th>
		<th>NOMOR INDUK</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>ALAMAT</th>
		<th>AKSI</th>
	</tr>
	@foreach($data_siswa as $siswa)
	<tr style="text-align: center;">
		<td>{{$siswa->nama_lengkap}}</td>
		<td>{{$siswa->nomor_induk}}</td>
		<td>{{$siswa->jenis_kelamin}}</td>
		<td>{{$siswa->agama}}</td>
		<td>{{$siswa->alamat}}</td>
		<td>
			<a href="/siswa/{{$siswa->id}}/detail" class="btn btn-info btn-sm">Detail</a>
			<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini ingin dihapus ?')">Hapus</a>
			
		</td>
	</tr>
	@endforeach
</table>
</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

			      <div class="modal-body">
			        <form action="/siswa/create" method="POST">
		        		{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Lengkap</label>
					    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nomor Induk</label>
					    <input name="nomor_induk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor_induk">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L">Laki-laki</option>
					      <option value="P">Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					

					</div>
			      	<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-info">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
@endsection
