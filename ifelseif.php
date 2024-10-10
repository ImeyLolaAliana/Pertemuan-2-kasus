<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" methode="get">
        Nilai : <input type="number" name="nilai"/>
        <input type="submit" value="proses"/>
</form>
<?php
$nilai = $_GET["nilai"]??Null;
if($nilai > 100){
    echo"data anda tidak valid";
}elseif($nilai >= 70){
    echo"lulus ujian dengan baik";
}elseif($nilai >= 60){
    echo"lulus ujian dengan cukup";
}else{
    echo"tidak lulus ujian";
}
?>
</body>
</html>