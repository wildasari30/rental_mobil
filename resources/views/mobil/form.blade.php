<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mobil</title>
</head>
<body>
    <div class="card">
        <h1>Form Tambah Mobil</h1>
        <form action="/mobil/simpan-data" method="post">
            @csrf
    </div>
    <label for="Nama Mobil">Nama Mobil</label><br>
    <input type="text" name="nama_mobil" required><br>
    <div>
        <label for="Merk Mobil"> Merk Mobil</label><br>
        <input type="text" name="merk_mobil" required><br>
    </div>

    <div>
        <label for="CC"> CC </label><br>
        <input type="text" name="cc" required><br>

    </div>
    <button type="submit">Simpan</button>
    <div>
    </form>
</body>
</html>