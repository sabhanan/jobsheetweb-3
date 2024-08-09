<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsite 2</title>
</head>
<body>
    <?php
    echo"nis : 2233298";
    echo"name :Muhammad Sabhanan Naja", "<br>";
    echo"Alamat : Mranggen, Tegalarum", "<br>";
    echo"Telpon : 0877911911", "<br>";
    echo"Email : wolesman@gmial.com", "<br><br>";


    //penjumlahan
    echo "NIS : 2233298", "<br>";
    echo "Name :  Muhammad Sabhanan Naja", "<br>";
    $nilaiTugas = 70*20/100;
    $nilaiUts = 80*35/100;
    $nilaiUas = 85*45/100;
    echo"Nilai Tugas = $nilaiTugas ", "<br>";
    echo"Nilai Uts = $nilaiUts ", "<br>";
    echo"Nilai Uas = $nilaiUas ", "<br>";
    $nilaiAkhir = $nilaiTugas+ $nilaiUts+ $nilaiUas;
    echo"Nilai Akhir = $nilaiAkhir <br>";

    if($nilaiAkhir >= 85){
        echo "Nilai huruf : A";
    }elseif($nilaiAkhir >= 80){
        echo "Nilai huruf : B";
    }elseif($nilaiAkhir >= 70){
        echo "Nilai huruf : C";
    }else{
        echo "Nilai huruf E";
    }
    ?>
</body>
</html>