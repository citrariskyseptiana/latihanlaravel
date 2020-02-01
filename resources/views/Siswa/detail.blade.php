@extends('layouts.master')

@section('content')
		<h1>Detail Data Siswa</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">

			        <form action="/siswa/{{$siswa->id}}/update" method="POST">
		        		{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Lengkap</label>
					    <input name="nama_lengkap" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap" value="{{$siswa->nama_lengkap}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nomor Induk</label>
					    <input name="nomor_induk" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor induk" value="{{$siswa->nomor_induk}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" disabled="disabled" class="form-control" id="exampleFormControlSelect1">
					      <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
					      <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" disabled="disabled" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan agama" value="{{$siswa->agama}}">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" disabled="disabled" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
					</div>
			        </form>
			    	</div>
			      </div>
			  	</div>
				</div>
</table>
@endsection