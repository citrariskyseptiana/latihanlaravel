@extends('layouts.master')

@section('content')
 
<form action="{{ url('sumber-pemasukan/add') }}" method="POST">
	@csrf
    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
		        <input class="form-control" type="text" id="exampleFormCon trolInput" placeholder="Nama Sumber" name="nama">
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-success">Tambah</button>
	        </div>
        </div>
    </div>
</form>

@endsection