<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan</title>
</head>
<body>

<center> ----------------------------------------------------------------------
<h2>Toko Cat Unyus</h2>
----------------------------------------------------------------------
    <table style="border collapse: collapse;">
    <tr>
    <td><pre>Nama         : <?php echo $_POST["nama"]; ?></pre></td>
    </tr>
    <tr>
    <td><pre>Alamat       : <?php echo $_POST["alamat"]; ?></pre></td>
    </tr>
    <tr>
    <td><pre>Jenis Cat    : <?php echo $_POST["jenis_cat"]; ?></pre></td>
    </tr>
    <tr>
    <td><pre>Warna        : <?php echo $_POST["warna_cat"]; ?></pre></td>
    </tr>
    <td><pre>Harga        : <?php $harga = 1;
    if($_POST["jenis_cat"] == "Bituminous paint") {
        echo $harga = 20000;
    }elseif($_POST["jenis_cat"] == "Chloroid Rubber") {
        echo $harga = 30000;
    }elseif($_POST["jenis_cat"] == "Vinyl") {
        echo $harga = 40000;
    }else{ 
        echo "pilih ccat terlebih dahulu";
    }
    ?></pre></td>
    <tr>
    <td><pre>Jumlah Beli  : <?php echo $_POST["jumlah_beli"]; ?></pre></td>
    </tr>
    </table>
    ----------------------------------------------------------------------
    </center>
    <center>
    <table style="border collapse: collapse;">
    <tr>
    <td><pre>Total Harga : <?php $total; 
    echo $total = $harga * $_POST["jumlah_beli"]; ?></pre></td>
    </tr>
    <tr>
    <td><pre>Diskon      : <?php $diskon =0;  
    if ($_POST["jumlah_beli"] >= 5 && $_POST["jumlah_beli"] < 10){
        $diskon = $total * 5/100;
    }
    echo $diskon;
    ?></pre></td>
    </tr>
    </table>
    ----------------------------------------------------------------------
    </center>
    <center><tr>
        <td><pre>total bayar : <?php $bayar;
        echo $bayar = $total - $diskon;
        ?></pre></td>
    </tr></center>
</body>
</html>
