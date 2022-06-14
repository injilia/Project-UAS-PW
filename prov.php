<?php

$conn = mysqli_connect("localhost", "root", "", "dataindonesia");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// mendapatkan id dari request di halaman utama
$id = $_GET["id"];
// mengambil data dari id yang telah di ambil
$row = query("SELECT * FROM t_provinsi WHERE id = $id")[0];
// mengambil data kabupaten dan kota dari provinsi yang dipilih
$kab = query("SELECT * FROM t_kota  WHERE id LIKE '$id%'");
// mengambil gambar destinasi wisata dari provinsi yang dipilih
$des = query("SELECT * FROM destinasi WHERE id LIKE '$id%'")
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/styleprov.css">
    <title>Provinsi</title>
</head>

<body>
    <div id="preloader"></div>
    <div class="main">
        <h1><?= $row['nama'] ?></h1>

        <div class="map">
            <p><?= $row['maplink'] ?></p>
        </div>
    </div>
    <div class="kab">
        <h1>List kabupaten/kota:</h1>
        <?php $i = 1 ?>
        <?php foreach ($kab as $kota) : ?>
            <p><i class="fa-solid fa-angle-right"></i> &nbsp;<?php echo $kota['nama']; ?></p>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
    <div class="des">
        <h1>Destinasi Wisata</h1>
        <div class="gallery">


            <?php $i = 1 ?>
            <?php foreach ($des as $im) : ?>
                <div class="img"><span><img src="<?php echo $im['fotolink']; ?>" alt=""></span>
                    <p><?php echo $im['nama']; ?></p>
                </div>

                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="footer">
        <h4>&copy;Copyright @2022 by kelompok 4</h4>
    </div>

</body>

</html>