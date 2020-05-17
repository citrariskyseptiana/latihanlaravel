 @extends('layouts.master')

@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Pemasukan</h3>
              <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Sumber Pemasukan</h3>
              <a href="{{ url('pemasukan/add') }}" class="btn btn-outline-primary">+ Tambah Data</a>
            </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Sumber</th>
                    <th scope="col" class="sort" data-sort="status">Nominal</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $index=>$dt)
                      <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ $dt->nominal }}</td>
                        <td>{{ date('d M Y',strtotime($dt->tanggal)) }}</td>
                        <td>
                          <div>
                          <a href="{{ url('pemasukan/'.$dt->pemasukan_id) }}"><i class="ni ni-ruler-pencil"></i>
                          <span>Edit</span></a>
                          <a class="btn-hapus" href="{{ url('pemasukan/'.$dt->pemasukan_id) }}"><i class="ni ni-fat-remove"></i>
                          <span>Hapus</span></a>
                      </div>
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
                  {{ method_field('delete') }}
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
    $('body').on('click','btn-hapus',function(e){
      e.preventDefault();
      $('modal-notification').modal();
    });
  });
</script>

@endsection
