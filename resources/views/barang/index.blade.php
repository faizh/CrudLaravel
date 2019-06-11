<a href="barang/tambah">Tambah Barang</a>
<table border="1">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga Barang</th>
		<th>Action</th>
	</tr>
	@foreach($barang as $b)
	<tr>
		<td>{{$b->kode_barang}}</td>
		<td>{{$b->nama_barang}}</td>
		<td>{{$b->harga}}</td>
		<td>
			<a href="barang/edit/{{$b->id}}">Edit</a>
			|
			<a href="barang/hapus/{{$b->id}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>