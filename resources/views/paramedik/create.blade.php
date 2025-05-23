<!DOCTYPE html>
<html>
<head>
    <title>Tambah Paramedik</title>
</head>
<body>
    <h1>Tambah Data Paramedik</h1>

    <form action="{{ url('/paramedik') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" required><br>

        <label for="tmp_lahir">Tempat Lahir:</label>
        <input type="text" name="tmp_lahir" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required><br>

        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" required><br>

        <label for="telpon">Telepon:</label>
        <input type="text" name="telpon" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="unit_kerja_id">Unit Kerja ID:</label>
        <input type="text" name="unit_kerja_id" required><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ url('/paramedik') }}">Kembali ke daftar paramedik</a>
</body>
</html>
