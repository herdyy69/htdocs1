<?php
if(isset($_POST['proses'])){
$sisi = $_POST['sisi'];


$hasil1 = $sisi * $sisi * $sisi * $sisi;
$hasil2 = $sisi * $sisi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS PERSEGI</title>
    <style>
        h3{
            margin-top: -20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body style="margin-top: 200px;">
    <center>
        <form action="" method="POST">
        <table>
        <h2>RUMUS PERSEGI</h2>
        
            <td>Masukkan Sisi :</td>
            <td><input type="number" name="sisi" placeholder="Masukkan Sisi..."></td>
            <td><input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2 style="margin-left: -70px;">LUAS : <?php echo $hasil2 ?></h2>
        <h2 style="margin-top: -20px;">KELILING : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>Rumus Luas dan Keliling Persegi</h2>
        <h3 style="margin-left: -20px;">Luas : S x S</h3>
        <h3>Keliling : 4 x S</h3>
    </center>
</body>
</html>