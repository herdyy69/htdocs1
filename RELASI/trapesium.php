<?php
if(isset($_POST['proses'])){
$sisi = $_POST['sisi'];
$tinggi = $_POST['tinggi'];

$hasil1 = 1/2 * $sisi * $tinggi;
}

if(isset($_POST['proses1'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $hasil2 = $a + $b + $c + $d;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS LUAS JAJAR GENJANG</title>
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
        <h2>RUMUS LUAS TRAPESIUM</h2>
        <tr>
            <td>Pilih Rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Jumlah sisi sejajar </td>
            <td>: <input type="number" name="sisi" placeholder="Masukkan alas..."></td>
        </tr>
        <tr>
            <td>Masukkan tinggi </td>
            <td>: <input type="number" name="tinggi" placeholder="Masukkan tinggi..."></td>
           
        </tr>
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>LUAS : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>RUMUS LUAS TRAPESIUM</h2>
        <h3>Luas : 1/2 x sisi sejajar x tinggi</h3>
    </center>
        <hr width="900px"> 
    <center>
        <form action="" method="POST">
        <table>
        <h2>RUMUS KELILING TRAPESIUM</h2>
        <tr>
            <td>Pilih Rumus</td>
            <td>: KELILING</td>
        </tr>
        <tr>
            <td>Masukkan sudut A </td>
            <td>: <input type="number" name="a" placeholder="Masukkan sudut a..."></td>
        </tr>
        <tr>
            <td>Masukkan sudut B </td>
            <td>: <input type="number" name="b" placeholder="Masukkan sudut b..."></td>
        </tr>
        <tr>
            <td>Masukkan sudut C </td>
            <td>: <input type="number" name="c" placeholder="Masukkan sudut c..."></td>
        </tr>
        <tr>
            <td>Masukkan sudut D </td>
            <td>: <input type="number" name="d" placeholder="Masukkan sudut d..."></td>
        </tr>
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses1"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>KELILING : <?php echo $hasil2 ?></h2>
        <hr width="500px">
        <h2>RUMUS KELILING TRAPESIUM</h2>
        <h3>Keliling : A + B + C + D</h3>
    </center>
</body>
</html>