<html>
<head>
    <title>Penggunaan Foreach</title>
</head>
<body>
DAFTAR MAHASISWA
<br>
<?php
    $mahasiswa = array(
        "Adriyan Sahpitran — NIM: 17250049",
        "Widya Putri Rahayu — NIM: 17250072",
        "Ridho Firmansyah — NIM: 17250199",
        "Rangga Aji Pramudya — NIM: 17250206",
        "Fernando Hasudungan Siregar — NIM: 17250232",
        "Duta Arrasyid — NIM: 17250278",
        "Glen Justin Maringan Simarmata — NIM: 17250323",
        "Renal Ali Syahid — NIM: 17250313",
        "Arla Maulana Eza Nugraha — NIM: 17250371",
        "Kevin Nabil Noor Rahman — NIM: 17250374",
        "Ahmad Fauzan Rizki — NIM: 17250400",
        "Ahmad Abu Jihad Bilhaq — NIM: 17250439",
        "Intan Purnamasari — NIM: 17250561",
        "Abdillah — NIM: 17250571",
        "Sefti Jikas Mu’afari — NIM: 17250513",
        "Ali Muslih Alfauzan — NIM: 17250654"
    );

    foreach ($mahasiswa as $nilai) {
        echo "$nilai<br>";
    }
?>
</body>
</html>