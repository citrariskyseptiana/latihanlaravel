@extends("layout")

@section("content")
	<h1>Daftar Mahasiswa</h1>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@forelse($mahasiswa as $data)
				<tr>
					<td>{{ $data->id }}</td>
					<td>{{ $data->name }}</td>
					<td>{{ $data->nim }}</td>
					<td>
						<button type="button" class="btn btn-success">Detail</button>
						<button type="button" class="btn btn-warning">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="4">Data Belum Tersedia!</td>
				</tr>
			@endforelse
		</tbody>
	</table>
@endsection