<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>SOAL 2</h1>
    <form action="" method="POST">
                <h1>PEMILIHAN  </h1>
                    <select name="pilih" id="" style="font-size: 30px; border-radius: 5px;">
                        <option value="Bintang">Bintang</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                <h1>MASUKKAN NILAI &nbsp; </h1>
                    <input type="text" name="nilai" placeholder="Masukkan Nilai..." style="font-size: 25px; margin-top: -200px;">
                    <input type="submit" value="PROSES" name="proses" style="font-size: 25px;">
                    <hr style="width: 500px; margin-top: 20px;">
    </form>
    <h1>HASIL</h1>
    <hr style="width: 12rem; margin-bottom: 1.5rem;">
</center>
</body>
</html>
<?php
if(isset($_POST['proses'])){
    $pilih = $_POST['pilih'];
    $nilai = $_POST['nilai'];

       echo "<center>";
    if($pilih == "Bintang"){
        for($i = 1; $i <= $nilai; $i++){
            for($j = 5; $j >= $i; $j--){
                echo "&nbsp";
            }
            for($k = 1; $k <= $i; $k++){
                echo " *";
            }
            for($j = 5; $j >= $i; $j--){
                echo "&nbsp";
            }
            echo "<br>";
        }
    }
    elseif($pilih == "Ganjil"){
        for($i = 1; $i <= $nilai; $i+=2){
                echo $i;
        }
    }
    elseif($pilih == "Genap"){
        for($i = 1; $i <= $nilai; $i+=2){
                echo $i+1;
        }
    }
}
echo "</center>"
?>