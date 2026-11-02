<html>
<head>
    <title> Penggunaan Foreach </title>
</head>
<body>
DAFTAR NAMA PERSONIL THE STROKES
<br>
<?php
    $warna = array("ojan","ahmad","rizki","julian","nick valensi","albert hammond jr");
    foreach ($warna as $nilai) {
        echo "$nilai<br>";
    }
?>
</body>
</html>