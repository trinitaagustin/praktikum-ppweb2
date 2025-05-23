<!DOCTYPE html>
<html>
<head>
    <title>Edit Paramedik</title>
</head>
<body>
    <h1>Edit Data Paramedik</h1>

    <form action="{{ url('/paramedik/'.$paramedik->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $paramedik->nama }}" required><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="{{ $paramedik->gender }}" required><br>

        <label for="tmp_lahir">Tempat Lahir:</label>
        <input type="text" name="tmp_lahir" value="{{ $paramedik->tmp_lahir }}" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" value="{{ $paramedik->tgl_lahir }}" required><br>

        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" value="{{ $paramedik->kategori }}" required><br>

        <label for="telpon">Telepon:</label>
        <input type="text" name="telpon" value="{{ $paramedik->telpon }}" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $paramedik->alamat }}" required><br>

        <label for="unit_kerja_id">Unit Kerja ID:</label>
        <input type="text" name="unit_kerja_id" value="{{ $paramedik->unit_kerja_id }}" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="{{ url('/paramedik') }}">Kembali ke daftar paramedik</a>
</body>
</html>
