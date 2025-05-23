<!DOCTYPE html>
<html>
<head>
    <title>Daftar Paramedik</title>
</head>
<body>
    <h1>Daftar Paramedik</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ url('/paramedik/create') }}">Tambah Data Paramedik</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kategori</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Unit Kerja ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paramedik as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->gender }}</td>
                    <td>{{ $p->tmp_lahir }}</td>
                    <td>{{ $p->tgl_lahir }}</td>
                    <td>{{ $p->kategori }}</td>
                    <td>{{ $p->telpon }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->unit_kerja_id }}</td>
                    <td>
                        <a href="{{ url('/paramedik/'.$p->id.'/edit') }}">Edit</a> |
                        <form action="{{ url('/paramedik/'.$p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
