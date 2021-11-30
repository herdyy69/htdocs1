<?php
if(isset($_POST['simpan'])){
$jt_dewasa = $_POST['jt_dewasa'];
$jt_anak = $_POST['jt_anak'];
$jt_bayi = $_POST['jt_bayi'];
$depart = $_POST['depart'];
$return = $_POST['return'];

if(is_numeric($jt_anak) && is_numeric($jt_bayi) && is_numeric($jt_dewasa))


if($depart == "Jakarta"){
    if($return == "Singapore"){
        $harga_anak = 300000 * 0.4 * $jt_anak;
        $harga_bayi = 300000 * 0.25 * $jt_bayi;
        $harga_dewasa = 300000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 250000 * 0.4 * $jt_anak;
        $harga_bayi = 250000 * 0.25 * $jt_bayi;
        $harga_dewasa = 250000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
elseif($depart == "Semarang"){
    if($return == "Singapore"){
        $harga_anak = 350000 * 0.4 * $jt_anak;
        $harga_bayi = 350000 * 0.25 * $jt_bayi;
        $harga_dewasa = 350000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 300000 * 0.4 * $jt_anak;
        $harga_bayi = 300000 * 0.25 * $jt_bayi;
        $harga_dewasa = 300000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
elseif($depart == "Palembang"){
    if($return == "Singapore"){
        $harga_anak = 325000 * 0.4 * $jt_anak;
        $harga_bayi = 325000 * 0.25 * $jt_bayi;
        $harga_dewasa = 325000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 285000 * 0.4 * $jt_anak;
        $harga_bayi = 285000 * 0.25 * $jt_bayi;
        $harga_dewasa = 285000 * $jt_dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
}
?>


<html>
    <head>
        <title>Relasi</title>
        <style>
            body{
                background-color: whitesmoke;
            }
        </style>
    </head>
    <body>
        <center>
    <table border="1" cellpadding="3" width="300" style="margin-top: 200px;">
       <tr>
           <td colspan="2" align="center">STRUK TRANSAKSI</td>
       </tr>
       <tr>
           <td>Depart</td>
           <td><?php echo $depart;?></td>
       </tr>
       <tr>
           <td>Return</td>
           <td><?php echo $return;  ?></td>
       </tr>
       <tr>
           <td>Jumlah Penumpang</td>
           <td>Dewasa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $jt_dewasa; ?> Orang<br>
               Anak-anak&nbsp; : <?php echo $jt_anak; ?> Orang<br>
               Bayi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $jt_bayi; ?> Orang<br>
           </td>
       </tr>
       <tr>
           <td>Total Harga</td>
           <td><?php echo $total_harga;  ?></td>
       </tr>
   </table>
</center>
    </body>
</html>