<?php 

    $coon = mysqli_connect('localhost', 'root', '', 'belajarphp');
    
    $id = $_GET['id'];
    
    mysqli_query($coon, "DELETE FROM mahasiswa WHERE id = $id");
    
    if(mysqli_affected_rows($coon) > 0){
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>  
        alert('Data Gagal Dihapus');
        document.location.href = 'index.php';
    </script>";
    }

?>