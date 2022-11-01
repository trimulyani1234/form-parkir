<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Parkir</title>
</head>
<body>
    <header>
        <h1>Form Parkir</h1>
</header>
<form action="proses-parkir.php" method="POST">
    <fieldset>
        <p>
        <label for="jenis_kendaraan">Jenis Kendaraan : </label>
        <input type="text" name="jenis_kendaraan" />
</p>
<p>
    <label for="tarif_harga">Tarif Harga : </label>
    <p><input type='radio' name='tarif_harga' value='2000' >2000</P> 
    <p><input type='radio' name='tarif_harga' value='4000' >4000</P> 
    <p><input type='radio' name='tarif_harga' value='5000' >5000</P> 
</p>
<p>
    <input type="submit" value="simpan" name="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>