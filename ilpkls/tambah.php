<?php
include('connection.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $nohp = $_POST['nohp'];
    $sql = "INSERT INTO pelajar (id,namapelajar,nokp,jantina,nohp)
    VALUES ('$id','$namapelajar','$nokp','$jantina','$nohp')";
    $result = mysqli_query($mysqli, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
        echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <form action="tambah.php" method="POST">
        <table>
            <tr>
                <td> Id </td>
                <td> <input type="text" name="id" placeholder="01"> </td>
            </tr>
            <tr>
                <td> Nama Anda </td>
                <td> <input type="text" name="namapelajar" placeholder="Mustafa Kamal"> </td>
            </tr>
            <tr>
                <td> No Kad Pengenalan </td>
                <td> <input type="text" name="nokp" placeholder="030512140435"></td>
            </tr>    
            <tr>
                <td> Jantina</td>
                <td> <input type="text" name="jantina" placeholder="Lelaki/Perempuan"></td>
            </tr> 
            <tr>       
                <td> Nombor HP</td>
                <td> <input type="text" name="nohp" placeholder="019999999"></td>
            </tr>    
        </table>
        <button type="submit">Simpan</button>
    </form>
    </center>
</body>
</html>