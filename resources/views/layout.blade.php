<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<a href="{{ route('logout') }}">
			Logout</a>
	</div>
	
	<div class="container">
		<div class="col-md-12">
			@yield("content")
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var table = $('#datatable').DataTable();

		table.on('click', '.detail', function() {
			$tr = $(this).closest('tr');
		if($($tr).hasClass('child')) {
			$tr = $tr.prev('.parent');
		}

		var data = table.row($tr).data();
		console.log(data);

		$('#id').val(data[0]);
		$('#name').val(data[1]);
		$('#nim').val(data[2]);

		$('#EditModal').modal('show');
		})
	})
</script>
</body>
</html>