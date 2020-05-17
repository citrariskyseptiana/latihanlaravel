@extends('layouts.master')

@section('content')

<div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Sumber Pemasukan</h3>
              <a href="{{ url('sumber-pemasukan/add') }}" class="btn btn-outline-primary">+ Tambah Data</a>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="Nama">Nama</th>
                    <th scope="col" class="sort" data-sort="Created">Created At</th>
                    <th scope="col" class="sort" data-sort="Action">
                    	<center>Action</center>
                    </th>
                  </tr>
                </thead>
                	<tbody>
                		@foreach($sumber as $index=>$sb)
                  		<tr>
                    		<td>{{ $index+1 }}</td>
                    		<td>{{ $sb->nama }}</td>
                    		<td>{{ $sb->created_at }}</td>
                    		<td>
                    			<center><div>
					                <a href="{{ url('sumber-pemasukan/'.$sb->id) }}"><i class="ni ni-ruler-pencil"></i>
					                <span>Edit</span></a>
					                <a sumber-id="{{ $sb->id }}" class="btn-hapus" href="{{ url('sumber-pemasukan/'.$sb->id) }}"><i class="ni ni-fat-remove"></i>
					                <span>Hapus</span></a>
				            	</div></center>
				        	</td>
                  		</tr>
                  		@endforeach
                	</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <form action="" method="POST">
                	@csrf
                	@method('delete')
                	<button type="submit" class="btn btn-white">Ok, Got it</button>
                </form>
                <button type="submit" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
    
		$('.btn-hapus').click(function(e){
			e.preventDefault();
			var id = $(this).attr('sumber-id');
			var url = "{{ url('sumber-pemasukan') }}"+'/'+id;
			$('#modal-notification').find('form').attr('action',url);
			$('#modal-notification').modal();
		})
	})
</script>

@endsection