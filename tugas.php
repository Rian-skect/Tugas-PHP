<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO CAT UNYUS</title>
</head>
<body>
    <fieldset>
        <legend>TOKO CAT UNYUS</legend>
        <form action="Tampilan.php" method="POST">
        <pre>Nama Costumer : <input type="text"name=nama></pre>
        <pre>Alamat        : <input type="text"name=alamat></pre>
        <pre><label>Jenis Cat     : </label><select name="jenis_cat">
        <option value="Bituminous Paint" >Bituminous Paint</option><option value="Chloroid Rubber">Chloroid Rubber</option><option value="Vinyl">Vinyl</option>
        </select></pre>
        <pre>Warna Cat     : <input type="radio" name="warna_cat" value="merah">Merah<input type="radio" name="warna_cat" value="biru">Biru<input type="radio"name="warna_cat"value="kuning">Kuning</pre>
        <pre>Jumlah Beli   : <input type="text" name=jumlah_beli></pre>
        <button type="Hitung">Hitung</button>
        <button type="Batal">Batal</button>
    </fieldset>
</body>
</html>
