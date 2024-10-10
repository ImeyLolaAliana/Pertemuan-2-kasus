<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-Rata</title>
    <style>
       
    </style>
</head>
<body>
    
    <h2>Rata-Rata Nilai dan Status Kelulusan</h2>
    <form action="" method="POST">
        <label for="nilai1">Nilai Mata Kuliah 1:</label>
        <input type="teks" name="nilai1" id="nilai1"><br><br>

        <label for="nilai2">Nilai Mata Kuliah 2:</label>
        <input type="teks" name="nilai2" id="nilai2"><br><br>

        <label for="nilai3">Nilai Mata Kuliah 3:</label>
        <input type="teks" name="nilai3" id="nilai3"><br><br>

        <input type="submit" value="Hitung">
    </form>
    <br>

    <?php
    $nilai1 = 0;
    $nilai2 = 0;
    $nilai3 = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
        
        $nilai1 = $_POST['nilai1']??NULL;
        $nilai2 = $_POST['nilai2']??NULL;
        $nilai3 = $_POST['nilai3']??NULL;

        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        if ($rata_rata >= 60) {
            $status = "Lulus";
          } else {
            $status = "Tidak Lulus";
          }
        
        if($rata_rata != NULL) {
            echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
            echo "Status Kelulusan: " . $status;
        }

    ?>
</body>
</html>
