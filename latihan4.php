<?php
if(isset($_POST['proses'])){
$rumus = $_POST['rumus'];


if($rumus == "Persegi"){
    header("location:RELASI/persegi.php");
}
elseif($rumus == "Persegi_panjang"){
    header("location:RELASI/Persegi_panjang.php");
}
elseif($rumus == "Luas_Segitiga"){
    header("location:RELASI/luas_Segitiga.php");
}
elseif($rumus == "Keliling_Segitiga"){
    header("location:RELASI/keliling_Segitiga.php");
}
elseif($rumus == "Luas_Lingkaran"){
    header("location:RELASI/luas_lingkaran.php");
}
elseif($rumus == "Keliling_Lingkaran"){
    header("location:RELASI/keliling_lingkaran.php");
}
elseif($rumus == "Luas_JajarGenjang"){
    header("location:RELASI/luas_jajargenjang.php");
}
elseif($rumus == "Keliling_JajarGenjang"){
    header("location:RELASI/keliling_jajargenjang.php");
}
elseif($rumus == "Trapesium"){
    header("location:RELASI/trapesium.php");
}
elseif($rumus == "Layang_layang"){
    header("location:RELASI/layanglayang.php");
}
elseif($rumus == "Belah_ketupat"){
    header("location:RELASI/belahketupat.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 4 || RUMUS BANGUN DATAR</title>
    <style>
        body{
            margin-top: 200px;
        }
    </style>
</head>
<body>
    
        <form method="POST">
            
            <h1 align="center">Rumus Bangun Datar <br></h1>
            <h3 align="center" style="margin-top: -20px;">Tentang Luas dan Keliling</h3>
            <hr align="center" width="400px">
            <table align="center" style="margin-top: -20px;">
                 <td><h4>Pilih Rumus</h4></td>
                 <td>
                   <select name="rumus" id="">
                        <option value="Persegi">Persegi</option>
                        <option value="Persegi_panjang">Persegi panjang</option>
                        <option value="Luas_Segitiga">Luas Segitiga</option>
                        <option value="Keliling_Segitiga">Keliling Segitiga</option>
                        <option value="Luas_Lingkaran">Luas Lingkaran</option>
                        <option value="Keliling_Lingkaran">Keliling Lingkaran</option>
                        <option value="Luas_JajarGenjang">Luas Jajar Genjang</option>
                        <option value="Keliling_JajarGenjang">Keliling Jajar Genjang</option>
                        <option value="Trapesium">Trapesium</option>
                        <option value="Layang_layang">Layang-layang</option>
                        <option value="Belah_ketupat">Belah Ketupat</option>
                    </select>
                </td>
                  <td><input type="submit" value="Proses" name="proses" style="margin-top: -200px;"></td>
                </table>
        </form>

</body>
</html>