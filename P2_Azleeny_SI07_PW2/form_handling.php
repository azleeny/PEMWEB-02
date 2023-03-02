<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
    <!-- tipe teks -->
        <label for="">Nama Mahasiswa : </label><br>
        <input type="text" name="nama"><br><br>
    <!-- tipe radio -->
        <label for="">Jenis Kelamin<label><br>
        <label for="">Laki - Laki</label>
        <input type="radio" name="jenis_kelamin" value="Laki - Laki"><br>
        <label for="">Perempuan</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan"><br><br>
    <!-- tipe chekbox -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="Hobi" value="Futsal">
            <label for="">Futsal</label><br>
        <input type="checkbox" name="Hobi" value="Badminton">
            <label for="">Badminton</label><br>
        <input type="checkbox" name="Hobi" value="Renang">
            <label for="">Renang</label><br>
        <input type="checkbox" name="Hobi" value="Voli">
            <label for="">Voli</label><br>
        <input type="checkbox" name="Hobi" value="Basket">
            <label for="">Basket</label><br><br>
    <!-- tipe number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br><br>
    <!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>
    <!-- button -->
    <button type="submit">Kirim!</button>
    <button type="reset">reset</button>
    </form>
</body>
</html>