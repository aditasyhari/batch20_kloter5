<?php
    if(isset($_POST['Login'])) {
        $loginEmail = $_POST['loginEmail'];
        $loginPassword = $_POST['loginPassword'];

        // mengaktifkan session php
        session_start();
        
        // menghubungkan dengan database
        include 'config/conn.php';
        
        // menyeleksi data admin dengan username dan password yang sesuai
        $data = mysqli_query($conn, "select * from users_tb where email='$loginEmail' and password='$loginPassword'");
        
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);
        
        if($cek > 0){
            $_SESSION['username'] = $loginEmail;
            $_SESSION['status'] = "login";
            header("Location: index.php");
        }else{
            // header("location:index.php?pesan=gagal");
        }
    }
    
?>