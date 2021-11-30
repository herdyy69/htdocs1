<?php
if(isset($_POST['proses'])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];


$hasil1 = $a * $b * $c;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS KELILING SEGITIGA</title>
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
        <h2>RUMUS KELILING SEGITIGA</h2>
        <tr>
            <td>Masukkan sisi a </td>
            <td>: <input type="number" name="a" placeholder="Masukkan sisi a..."></td>
        </tr>
        <tr>
            <td>Masukkan sisi b </td>
            <td>: <input type="number" name="b" placeholder="Masukkan sisi b..."></td>
           
        </tr>
        <tr>
            <td>Masukkan sisi b </td>
            <td>: <input type="number" name="c" placeholder="Masukkan sisi c..."></td>
           
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
        <h2>Rumus Keliling Segitiga</h2>
        <h3>Keliling : alas A x alas B x alas C</h3>
    </center>
</body>
</html>