<?php
include('connection.php');
if(isset($_POST['nokp'])) {
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $nohp = $_POST['nohp'];
    $sql = "UPDATE pelajar SET id='$id', namapelajar='$namapelajar', nokp='$nokp',
    jantina='$jantina', nohp='$nohp' WHERE nokp='$nokp'";
    $result = mysqli_query($mysqli, $sql);
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
        echo "<script>window.location='index.php'</script>";
}
$nokp = $_GET['nokp'];
$sql = "SELECT * FROM pelajar WHERE nokp = '$nokp' ";
$result = mysqli_query($mysqli, $sql);
while ($r = mysqli_fetch_array($result)) {
    $id = $r['id'];
    $namapelajar = $r['namapelajar'];
    $nokp = $r['nokp'];
    $jantina = $r['jantina'];
    $nohp = $r['nohp'];
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
        <form action="kemaskini.php" method="POST">
            <table>
                <tr>
                <td>Id:</td>
                    <td>
                        <input type="text" name="id" value='<?php echo $id ?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pelajar</td>
                    <td><input type="text" name="namapelajar" value="<?php echo $namapelajar; ?>"></td>
                </tr>
                <tr>
                    <td>Nombor Kad Pengenalan</td>
                    <td><input type="text" name="nokp" value="<?php echo $nokp; ?>"></td>
                </tr>          
                <td>Jantina</td>
                    <td>
                        <input type="text" name="jantina" value='<?php echo $jantina; ?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nombor Telefon</td>
                    <td><input type="text" name="nohp" value="<?php echo $nohp; ?>"></td>
                </tr>
                <tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>

