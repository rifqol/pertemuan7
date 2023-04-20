<!DOCTYPE html>
<html>
<head>
    <title>Detail List Film</title>
</head>
<body>
    <ul>
        <li><img src="img/<?=$_GET["gambar"]; ?>"></li>
        <li>Judul Film : <?= $_GET["Judul"];?></li>
        <li>Tahun Rilis : <?= $_GET["TahunRilis"];?></li>
        <li>Sutradara : <?= $_GET["Sutradara"];?> </li>
        <li>Pemeran Utama : <?= $_GET["PemeranUtama"];?></li>
    </ul>

    <a href="latihan1.php">Kembali ke List Film</a>
</body>
</html>

