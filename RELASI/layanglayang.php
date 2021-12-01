<?php
if(isset($_POST['proses'])){
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];

$hasil1 = 1/2 * $d1 * $d2;
}

if(isset($_POST['proses1'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $hasil2 = 2 * ($a*$b + $b*$c);
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
        <h2>RUMUS LUAS LAYANG-LAYANG</h2>
        <tr>
            <td>Pilih Rumus</td>
            <td>: LUAS</td>
        </tr>
        <tr>
            <td>Masukkan diagonal 1 </td>
            <td>: <input type="number" name="d1" placeholder="Masukkan diagonal 1..."></td>
        </tr>
        <tr>
            <td>Masukkan diagonal 2 </td>
            <td>: <input type="number" name="d2" placeholder="Masukkan diagonal 2..."></td>
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
        <h2>RUMUS LUAS LAYANG-LAYANG</h2>
        <h3>Luas : 1/2 x Diagonal 1 x Diagonal 2</h3>
    </center>
        <hr width="900px"> 
    <center>
        <form action="" method="POST">
        <table>
        <h2>RUMUS KELILING LAYANG-LAYANG</h2>
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
        <h2>RUMUS KELILING LAYANG-LAYANG</h2>
        <h3>Keliling : 2 x (AB + BC)</h3>
    </center>
</body>
</html>