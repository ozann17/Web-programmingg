<html>
<head>
    <title>Tarif Parkir</title>
</head>
<body>
<?php
    $jenis  = "Motor";   // isi "Motor" atau "Mobil"
    $durasi = 30;        // lama parkir (jam)

    // Tentukan tarif sesuai jenis kendaraan
    if ($jenis == "Motor")
    { $pertama = 3000; $berikutnya = 2000; $maks = 15000; $inap = 20000; $valid = true; }
    elseif ($jenis == "Mobil")
    { $pertama = 5000; $berikutnya = 3000; $maks = 30000; $inap = 50000; $valid = true; }
    else
    { $valid = false; }

    if ($valid && $durasi > 0)
    {
        $sisaJam  = $durasi % 24;                // sisa jam
        $hariInap = ($durasi - $sisaJam) / 24;   // jumlah 24 jam penuh

        // Hitung tarif sisa jam
        if ($sisaJam == 0)
        { $tarifSisa = 0; }
        elseif ($sisaJam == 1)
        { $tarifSisa = $pertama; }
        else
        { $tarifSisa = $pertama + ($sisaJam - 1) * $berikutnya; }

        // Batasi dengan tarif maksimal
        if ($tarifSisa > $maks)
        { $tarifSisa = $maks; }

        $total = ($hariInap * $inap) + $tarifSisa;

        echo "Jenis kendaraan : $jenis <br>";
        echo "Lama parkir     : $durasi jam <br>";
        echo "Tarif inap      : $hariInap x Rp " . number_format($inap, 0, ',', '.') . "<br>";
        echo "Sisa $sisaJam jam    : Rp " . number_format($tarifSisa, 0, ',', '.') . "<br>";
        echo "<b>Total bayar    : Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    else
    {
        echo "Jenis kendaraan atau durasi tidak valid";
    }
?>
</body>
</html>