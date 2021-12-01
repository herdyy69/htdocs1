<?php
if(isset($_POST['proses'])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];


$hasil1 = $a * $b * $c * $d;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMUS KELILING JAJAR GENJANG</title>
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
        <h2>RUMUS KELILING JAJAR GENJANG</h2>
        <tr>
            <td>Masukkan sudut a </td>
            <td>: <input type="number" name="a" placeholder="Masukkan sisi a..."></td>
        </tr>
        <tr>
            <td>Masukkan sudut b </td>
            <td>: <input type="number" name="b" placeholder="Masukkan sisi b..."></td>
           
        </tr>
        <tr>
            <td>Masukkan sudut c </td>
            <td>: <input type="number" name="c" placeholder="Masukkan sisi c..."></td>
           
        </tr>
        <tr>
            <td>Masukkan sudut d </td>
            <td>: <input type="number" name="d" placeholder="Masukkan sisi d..."></td>
           
        </tr>
        <tr>
            <td></td>
             <td>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></td>
        </tr>
    </table>
</form>
        <h2>Hasil</h2>
        <hr width="200px">
        <h2>Keliling : <?php echo $hasil1 ?></h2>
        <hr width="500px">
        <h2>Rumus Keliling Jajar Genjang</h2>
        <h3>Keliling : sudut A x sudut B x sudut C x sudut d</h3>
    </center>
</body>
</html>