<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Data Barang</h3>
 
	<a href="/crudlaravel/public/barang"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/crudlaravel/public/barang/store" method="get">
		{{ csrf_field() }}
		Kode Barang <input type="text" name="kode" required="required"> <br/>
		Nama Barang <input type="text" name="nama" required="required"> <br/>
		Harga Barang <input type="text" name="harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>