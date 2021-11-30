<?php
if(isset($_POST['proses'])){
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];


$hasil1 = $panjang * $lebar;
$hasil2 = 2 * ($panjang + $lebar);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS PERSEGI PANJANG</title>
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
        <h2>RUMUS PERSEGI PANJANG</h2>
        <tr>
            <td>Masukkan Panjang </td>
            <td>: <input type="number" name="panjang" placeholder="Masukkan panjang..."></td>
        </tr>
        <tr>
            <td>Masukkan Lebar </td>
            <td>: <input type="number" name="lebar" placeholder="Masukkan lebar..."></td>
           
        </tr>
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2 style="margin-left: -60px;">LUAS : <?php echo $hasil1 ?></h2>
        <h2 style="margin-top: -20px;">KELILING : <?php echo $hasil2 ?></h2>
        <hr width="500px">
        <h2>Rumus Luas dan Keliling persegi Panjang</h2>
        <h3 style="margin-left: -20px;">Luas : P x L</h3>
        <h3>Keliling : 2 x (P + L)</h3>
    </center>
</body>
</html>