<h2>Data Level</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $row)
    <tr>
        <td>{{ $row->level_id }}</td>
        <td>{{ $row->level_kode }}</td>
        <td>{{ $row->level_nama }}</td>
    </tr>
    @endforeach
</table>