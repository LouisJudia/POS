<h2>Data User</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Level</th>
        <th>Username</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $row)
    <tr>
        <td>{{ $row->user_id }}</td>
        <td>{{ $row->level_id }}</td>
        <td>{{ $row->username }}</td>
        <td>{{ $row->nama }}</td>
    </tr>
    @endforeach
</table>