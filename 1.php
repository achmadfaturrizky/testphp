<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo koneksi database MySQL</h1>
    <?php
    $conn=mysqli_connect("localhost", "root", "");
    if($conn){
        echo "Server terkoneksi";
    }else{
        echo "Server tidak terkoneksi";
    }
    ?>
    </body>
</html>

//analisis

kodingan ini untuk mengkoneksikan database ke php, 
dan ada pengecekan apakah sudah terkoneksi atau belum
jika sudah akan memunculkan tulisan server terkoneksi, 
jika tidak maka memunculkan tulisan server tidak terkoneksi
