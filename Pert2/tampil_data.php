<a href="insert.php" >tambah data</a>
<h2>Daftar data dalam database</h2>
<?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa");
    $i = 0;
    while($brs = mysqli_fetch_assoc($r)){
        echo ++$i.". ".$brs['nama'];
        
        //tambahan ada di sini untuk edit, br pindahin ke bawah ya anak2 
        echo ' <a href="edit.php?id='.$brs['id'].'">Edit</a>';
        echo ' <a href="delete.php?id='.$brs['id'].'">Delete</a><br>';
    }

?>
