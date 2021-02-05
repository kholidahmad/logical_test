<?php
    // Buatlah fungsi untuk membagi 2 buah bilangan, tidak diperbolehkan menggunakan operator pembagian seperti “div” atau “/”. Output hasil bagi adalah bilangan bulat saja, tidak perlu desimal. Misal 7:2 = 3 atau 8:4 = 2.
    function bagi($pembilang, $penyebut) {
        $hasil = 0;
        while ($pembilang >= $penyebut) {
            $pembilang -= $penyebut;
            $hasil++;
        }
        return $hasil;
    }
    $nilaiPembilang = 7;
    $nilaiPenyebut = 2;
    $hasil = bagi($nilaiPembilang,$nilaiPenyebut);
    echo $nilaiPembilang . ":" . $nilaiPenyebut . " = ".$hasil."<br>";

?>