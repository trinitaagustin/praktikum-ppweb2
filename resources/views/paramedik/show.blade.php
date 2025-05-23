<!DOCTYPE html>
<html>
<head>
    <title>Detail Paramedik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #333;
        }
        .detail-box {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            max-width: 500px;
        }
        .detail-box p {
            margin: 5px 0;
        }
        .back-link {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #3490dc;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1>Detail Paramedik</h1>

    <div class="detail-box">
        <p><strong>Nama:</strong> {{ $paramedik->nama }}</p>
        <p><strong>Gender:</strong> {{ $paramedik->gender }}</p>
        <p><strong>Tempat Lahir:</strong> {{ $paramedik->tmp_lahir }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $paramedik->tgl_lahir }}</p>
        <p><strong>Kategori:</strong> {{ $paramedik->kategori }}</p>
        <p><strong>Telepon:</strong> {{ $paramedik->telpon }}</p>
        <p><strong>Alamat:</strong> {{ $paramedik->alamat }}</p>
        <p><strong>Unit Kerja:</strong> {{ $paramedik->unit_kerja_id }}</p>
    </div>

    <a href="{{ url('/paramedik') }}" class="back-link">← Kembali ke daftar paramedik</a>
</body>
</html>
