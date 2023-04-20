<?php

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminfelulet</title>
</head>
<body>
    <h2>Bejelentkezes</h2>
    <form action="post">
        <label for="felhnev">Felhasznalonev:</label>
        <input type="text" name="felh" id="felh">
        <label for="p">Jelszo:</label>
        <input type="password" name="pwd" id="pwd">
        <input type="submit" value="Bejelentkezes" name="bejel">
    </form>
</body>
</html>