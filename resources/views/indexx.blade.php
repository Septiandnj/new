<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>
<body>
<table border="1" bgcolor="cyan">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
	</tr>

	@foreach ($a as $data)
	{{ $data }}
@endforeach
</table>
</body>
</html>