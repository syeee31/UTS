<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <form action="output.php" method="post">
            <label>Nama Operator</label> :
            <input type="text" name="operator" id="operator" required><br>
            <label>NIM</label> :
            <input type="text" name="nim" id="nim" required><br>
            <label>Wilayah</label> :
            <select name="wilayah" id="wilayah" required>
                <option>DKI Jakarta</option>
                <option>Jawa Barat</option>
                <option>Banten</option>
                <option>Jawa Tengah</option>
            </select> <br>
            <label>Jumlah Positif</label> :
            <input type="text" name="positif" id="positif" required><br>
            <label>Jumlah Dirawat</label> :
            <input type="text" name="dirawat" id="dirawat" required><br>
            <label>Jumlah sembuh</label> :
            <input type="text" name="sembuh" id="sembuh" required><br>
            <label>Jumlah meninggal</label> :
            <input type="text" name="meninggal" id="meninggal" required><br>
            <button type="submit" name="tampilkan">Tampilkan</button>    
        </form>
        
        <?php
        if (isset($_POST['tampilkan'])) :
            echo "<pre><center>";
            echo "Data Pemantauan Covid19 wilayah " . $_POST["wilayah"] . "<br>";
            echo DATE("d M Y H:i:s") . "(Waktu dan Jam Sekarang)<br>";
            echo $_POST["operator"] . "/" . $_POST["nim"];
            echo "<table border='1'>";
            echo "<tr><td>Positif</td><td>Dirawat</td><td>Sembuh</td><td>Meninggal</td></tr>";
            echo "<tr><td>" . $_POST["positif"] . "</td><td>" . $_POST["dirawat"] . "</td><td>" . $_POST["sembuh"] . "</td><td>" . $_POST["meninggal"] . "</td></tr>";
            echo "</table>";
            echo "</center></pre>";
        ?>
        <script type="text/javascript">
            document.getElementById('operator').value="<?= $_POST["operator"] ?>";
            document.getElementById('nim').value="<?= $_POST["nim"] ?>";
            document.getElementById('positif').value="<?= $_POST["positif"] ?>";
            document.getElementById('dirawat').value="<?= $_POST["dirawat"] ?>";
            document.getElementById('sembuh').value="<?= $_POST["sembuh"] ?>";
            document.getElementById('meninggal').value="<?= $_POST["meninggal"] ?>";
            document.getElementById('wilayah').value="<?= $_POST["wilayah"] ?>";

        </script>
        <?php
        endif;
        ?>
    </pre>
</body>

</html>