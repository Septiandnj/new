<!DOCTYPE html>
<html>
<head>
	<title>Nama Buah</title>
</head>
<body>
<h1>Daftar Nama =</h1>
@foreach ($aa as $data)
	<li>{{ $data }}</li>
@endforeach
</body>
</html>