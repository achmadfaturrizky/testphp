<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <hi>Koneksi database dengan mysqli_fetch_array</hi>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dab_saya")
    or die("koneksi gagal");
    $hasil = mysqli_query($conn, "select * from liga");
    while($row = mysqli_fetch_array($hasil)){
        echo "Liga" .$row["negara"]; //array asosiatif
        echo "mempunyai " .$row[2]; // array numeris
        echo "wakil di liga champion <br>";
    }
    ?>
</body>
</html>