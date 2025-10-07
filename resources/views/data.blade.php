<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
</head>
<body>
    <h2>Input Data Tamu</h2>
    <form action="/daftar" method="POST">
        @csrf
        <label >Nama:</label>
        <input type="text" name="nama"><br><br>

        <label >Umur:</label>
        <input type="number" name="umur"><br><br>

        <label >Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <label >No.Telepon:</label>
        <input type="text" name="telp"><br><br>
        
        <button type="submit">Kirim</button>
    </form>
</body>
</html>