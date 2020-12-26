<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css"></link>
   
    <title>Seleksi Bootcamp Dumbways.id</title>

</head>
<body>

    <div class="container">
        <section id="formHolder">

            <div class="row">

                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <a href="#" class="logo">DB <span>.</span></a>

                    <div class="heading">
                        <h2>BOOTCAMP</h2>
                        <p>Dumbways.id</p>
                    </div>

                    <div class="success-msg">
                        <p>Great! You are one of our members now</p>
                        <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>


                <!-- Form Box -->
                <div class="col-sm-6 form">

                    <!-- Login Form -->
                    <div class="login form-peice switched">
                        <form class="login-form" action="cek-login.php" method="post">
                            <div class="form-group">
                                <label for="loginemail">Email Adderss</label>
                                <input type="email" name="loginEmail" id="loginemail" required>
                            </div>

                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" name="loginPassword" id="loginPassword" required>
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Login" name="Login">
                                <a href="#" class="switch">I'm New</a>
                            </div>
                        </form>
                    </div>
                    
                    
                    
                    <!-- End Login Form -->


                    <!-- Signup Form -->
                    <div class="signup form-peice">
                        <form class="signup-form" action="login.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="name">
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Adderss</label>
                                <input type="email" name="email" id="email" class="email">
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="pass">
                                <span class="error"></span>
                            </div>

                            <!-- <div class="form-group">
                                <label for="passwordCon">Confirm Password</label>
                                <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                                <span class="error"></span>
                            </div> -->

                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile04">Unggah Foto</label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="photo" accept=".jpg, .png">
                                </div>
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Signup" name="Signup" id="submit">
                                <a href="#" class="switch">I have an account</a>
                            </div>
                        </form>
                    </div>

                    <?php

                        if(isset($_POST['Signup'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            // $passConfirm = $_POST['passConfirm'];
                            $target_dir = "img/profile/";
                            $target_file = $target_dir.$_FILES["photo"]["name"];

                            include_once("config/conn.php");

                            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
                                
                            $namaPhoto=$_FILES['photo']['name'];

                            mysqli_query($conn, "INSERT INTO users_tb(name,email,password,photo) VALUES('$name','$email','$password','$namaPhoto')");

                            header("location: index.php");

                        }
                    ?>

                    <!-- End Signup Form -->
                </div>
            </div>

        </section>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="assets/js/login.js"></script>
   
</body>
</html>