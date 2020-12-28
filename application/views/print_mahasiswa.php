<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
</head>
<body>

    <table class="table" border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Telpon</th>
        </tr>

        <?php
        $no = 1;
        foreach($mahasiswa as $mhs):
        ?>
        <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $mhs->nama ;?></td>
            <td><?php echo $mhs->nim ;?></td>
            <td><?php echo $mhs->tgl_lahir ;?></td>
            <td><?php echo $mhs->jurusan ;?></td>
            <td><?php echo $mhs->alamat ;?></td>
            <td><?php echo $mhs->email ;?></td>
            <td><?php echo $mhs->no_telp ;?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
        window.print();
    </script>
    
</body>
</html>