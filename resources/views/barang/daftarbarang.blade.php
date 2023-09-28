<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Id Suplier</th>
    </tr>
    @foreach($data_barang as $barang)
    <tr>
        <td>{{ ++$no }}.</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>Rp {{ $barang->harga }}</td>
        <td>{{ $barang->stok }}</td>
        <td>{{ $barang->id_suplier }}</td>
    </tr>
    @endforeach
</table>