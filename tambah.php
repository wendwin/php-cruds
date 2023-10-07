<?php 
      $coon = mysqli_connect('localhost', 'root', '', 'belajarphp');

      if(isset($_POST['submit'])){

        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
    
        mysqli_query($coon, "INSERT INTO mahasiswa VALUES ('','$nama','','$nim','$email','$jurusan')");

        if(mysqli_affected_rows($coon) > 0){
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>  
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
        </script>";
        }
      };
      
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
    <h1 class="my-5 text-center">Tambah Data</h1>
    <div class="container" >
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5">
                <form action="" method="post">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap" required>
                    </div>
                    <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" placeholder="nim" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" required>
                            <!-- <option selected>Options</option> -->
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="d-flex mt-4 justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>