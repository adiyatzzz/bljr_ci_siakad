<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar mahasiswa</title>
</head>
<body>

    <table border="1">

        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Alamat</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs) :?>
        <tr>
            <td><?php echo $mhs["nama"]; ?></td>
            <td><?php echo $mhs["nim"]; ?></td>
            <td><?php echo $mhs["alamat"]; ?></td>
        </tr>
        <?php endforeach; ?>
        

    </table>
    
</body>
</html>