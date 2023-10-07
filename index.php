<?php 
    $coon = mysqli_connect('localhost', 'root', '', 'belajarphp');
    $data = mysqli_query($coon, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Insert-Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-5 text-center">Daftar Mahasiswa</h1>

        <a class="btn btn-primary mb-4" href="tambah.php" role="button">Tambah Data</a>

        <table  class="table table-striped" border="1" cellspacing ="0" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0 ?>
                <?php while( $row = mysqli_fetch_assoc($data)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['gambar'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="ubah.php?id=<?= $row['id'] ?>" role="button">Ubah</a>
                        <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row['id'] ?>" role="button" onclick="return confirm('Data <?= $row['nama'] ?> akan dihapus! ')">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endwhile ; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>