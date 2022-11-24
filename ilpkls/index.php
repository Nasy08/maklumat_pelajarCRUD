<?php
include_once "connection.php";

$result = mysqli_query($mysqli, "SELECT * FROM pelajar ORDER BY nokp ASC");
 
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $nohp = $_POST['nohp'];
    $jantina = $_POST['jantina'];

    $add = mysqli_query($mysqli, "INSERT INTO pelajar(id,namapelajar,nokp,nohp,jantina) 
    VALUES('$id','$namapelajar','$nokp','$nohp','$jantina' NOW())");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILP KLS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>DATA PELAJAR ILPKLS</h1>
<center>
        <div class="container">
            <table>
                <tr>
                    <th>Bil.</th>
                    <th>ID</th>
                    <th>Nama Pelajar</th>
                    <th>No.Kad Pengenaln</th>
                    <th>No.HP</th>
                    <th>Jantina</th>
                    <th>OPERATION</th>
                </tr>
                <?php
                $sql = "SELECT * FROM pelajar ORDER BY id ASC";
                $data = mysqli_query($mysqli, $sql);
                $bil = 1;
                    while ($r = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td class="bilnum"><?php echo $bil; ?></td>
                            <td><?php echo $r['id']; ?></td>
                            <td><?php echo $r['namapelajar']; ?></td>
                            <td><?php echo $r['nokp']; ?></td>
                            <td><?php echo $r['nohp']; ?></td>
                            <td><?php echo $r['jantina']; ?></td>
                            <td>
                            <button class="update"><a href="kemaskini.php?nokp=<?php echo $r['nokp'] ?>">Update</a></button>
                            <button class="delete"><a href="padam.php?nokp=<?php echo $r['nokp'] ?>">Delete</a></button>
                            </td> 
                        </tr> 
                    <?php $bil = $bil + 1; 
                    } 
                    ?> 
            </table>
            <button><a href="tambah.php">Tambah Pelajar</a></button>
        </div>
    </center>
</div>

</body>
</html>