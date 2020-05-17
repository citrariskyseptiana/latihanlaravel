@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<form action="{{ url('pemasukan/'.$data->pemasukan_id) }}" method="POST">
	@csrf
	{{ method_field('put') }}
	<div class="form-group">
		<label for="exampleInputEmail" style="color: white;">
			Sumber Pemasukan
		</label>
		<select class="form-control" name="sumber_pemasukan">
			<option selected="" disabled="">Pilih Sumber Pemasukan</option>
			@foreach($sumber as $sb)
			<option value="{{ $sb->id }}" {{ ($data->sumber_pemasukan == $sb->id) ? 'selected' : ""}}>{{ $sb->nama }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1" style="color: white;">
			Nominal
		</label>
		<input type="number" class="form-control" placeholder="Nominal" name="nominal" id="exampleInputPassword1" value="{{ $data->nominal }}">
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1" style="color: white;">
			Tanggal
		</label>
		<input type="text" class="form-control datepicker" placeholder="Tanggal" name="tanggal" autocomplete="off" value="{{ date('m/d/Y',strtotime($data->tanggal)) }}">
	</div>

	<div class="form-group">
		<label style="color: white;">
			Keterangan
		</label>
		<textarea class="form-control" rows="10" name="keterangan">{{ $data->keterangan }}</textarea>
	</div>

	<button type="submit" class="btn btn-default">Update</button>
</form>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		$( ".datepicker" ).datepicker();
	})
</script>

@endsection