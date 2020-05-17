@extends('layouts.master')

@section('content')
 
<form action="{{ url('sumber-pemasukan/'.$data->id) }}" method="POST">
	@csrf
	{{ method_field('put') }}
    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
		        <input class="form-control" type="text" id="exampleFormCon trolInput" placeholder="Nama Sumber" value="{{ $data->nama }}" name="nama">
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-success">Edit Sumber</button>
	        </div>
        </div>
    </div>
</form>

@endsection