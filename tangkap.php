<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangkap</title>
</head>
<body>
    <a href="tangkap.php?v1=saya&v2=keren">$_GET</a>
    <br>
    <hr>
    <br>
    <fieldset id="ini">
        <label for="ini">DATA</label>
        <form method="POST" action="proses.php">
            <p>Nama   : <input type="text" name="nama"></p>
            <p>Alamat : <input type="text" name="alamat"></p>
            <p><input type="submit" value="Proses" name="submit"></p>
        </form>
    </fieldset>
</body>
</html>