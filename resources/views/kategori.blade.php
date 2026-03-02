<h2>Data Kategori</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $row)
    <tr>
        <td>{{ $row->kategori_id }}</td>
        <td>{{ $row->kategori_kode }}</td>
        <td>{{ $row->kategori_nama }}</td>
    </tr>
    @endforeach
</table>