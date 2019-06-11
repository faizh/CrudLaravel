<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h3>Data Barang</h3>
 
	<a href="/crudlaravel/public/barang"> Kembali</a>
	
	<br/>
	<br/>
 	
 	@foreach($barang as $b)
	<form action="/crudlaravel/public/barang/update/{{$b->id}}" method="post">
		{{ csrf_field() }}
		
		Kode Barang <input type="text" name="kode" required="required" value="{{$b->kode_barang}}"> <br/>
		Nama Barang <input type="text" name="nama" required="required" value="{{$b->nama_barang}}"> <br/>
		Harga Barang <input type="text" name="harga" required="required" value="{{$b->harga}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>