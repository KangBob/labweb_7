<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
<h1>Learn PHP</h1>
<h2>Form Input</h2>
<form action="#" method="post">
    <label>Nama : </label>
    <input type="text" name="nama"><br>
    <br>
    <label>Tanggal Lahir : </label>
    <input type="date" name="age" />
    <br>
    <br>
    <label>Jenis Pekerjaan : </label>
    <select name="Pekerjaan">
        <option value=""></option>
        <option value="Programer">Programer</option>
        <option value="Database Engineering">Database Engineering</option>
        <option value="Software Engineering">Software Engineering</option>
    </select>
    <input type="submit" name="submit" value="Send" />
</form><br>
<?php
echo "Hallo Nama Saya Adalah " .$_POST['nama'];

if(isset($_POST['age'])){
    $dob = $_POST['age'];
calculate_age($dob);
$year = calculate_Year($dob);
}
function calculate_age($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return printf(' umur %d tahun', $diff->y);
}
function calculate_Year($birthday)
{
    $today = new DateTime();
    $diff = $today->diff(new DateTime($birthday));
    return  $diff->y;
}

if(isset($_POST['submit'])){
    $selected_val = $_POST['Pekerjaan'];
    if($selected_val == "Programer"){
        echo " Dengan pekerjaan sebagai " .$selected_val ." Dengan Gaji  Rp. 8.300.000,-";
    }else{
        echo " Dengan pekerjaan sebagai" .$selected_val ." Dengan Gaji Rp. 5.600.000,-";}
    }
 ?>
</body>
</html>