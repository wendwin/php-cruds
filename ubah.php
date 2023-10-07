<?php 
     $coon = mysqli_connect('localhost', 'root', '', 'belajarphp');
     
     $id = $_GET['id'];

     $data = mysqli_query($coon, "SELECT * FROM mahasiswa WHERE id = $id");
     $row = mysqli_fetch_assoc($data);
     
     if(isset($_POST['submit'])){

        $nama = $_POST['nama'];
        $email = $_POST['email'];
    
        mysqli_query($coon, "UPDATE mahasiswa SET nama = '$nama', email = '$email'WHERE id = $id");

        if(mysqli_affected_rows($coon) > 0){
            echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>  
            alert('Data Gagal Diubah');
            document.location.href = 'index.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="my-5 text-center">Ubah Data</h1>
    <div class="container" >
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap" required value="<?= $row['nama'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" placeholder="nim" readonly value="<?= $row['nim'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required value="<?= $row['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="jurusan" class="form-control" id="jurusan" name="jurusan" readonly value="<?= $row['jurusan'] ?>">
                    </div>
                    <div class="d-flex mt-4 justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>