<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="/mahasiswa/update/{{ $data->id }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $data->nama }}"><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="{{ $data->nim }}"><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" value="{{ $data->jurusan }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
