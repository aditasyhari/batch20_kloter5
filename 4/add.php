<?php 
    session_start(); 
    require_once('config/conn.php');
?>
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
                        <h2>ADD</h2>
                        <p>CONTENT</p>
                    </div>
                </div>


                <!-- Form Box -->
                <div class="col-sm-6 form">
                    
                    <!-- Form -->
                    <div class="signup form-peice">
                        <form class="signup-form" action="add.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <!-- <label for="content">Judul Content</label> -->
                                <input type="text" name="content" id="content" placeholder="Judul Content">
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <select name="id_user">
                                    <option value="" disabled selected>Select Author</option>
                                <?php 
                                    $query = mysqli_query($conn, "select * from users_tb");

                                    while($d = mysqli_fetch_array($query)){
                                        ?>
                                            <option value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
                                        <?php 
                                    }
                                ?>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile04">Unggah Foto</label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image" accept=".jpg, .png">
                                </div>
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Add" name="Add" id="submit">
                                <a href="index.php" >Back</a>
                            </div>
                        </form>
                    </div>

                    <?php

                        if(isset($_POST['Add'])) {
                            $content = $_POST['content'];
                            $id_user = $_POST['id_user'];
                            $target_dir = "img/post/";
                            $target_file = $target_dir.$_FILES["image"]["name"];

                            include_once("config/conn.php");

                            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                                
                            $namaImage=$_FILES['image']['name'];

                            mysqli_query($conn, "INSERT INTO post_tb(content,image,id_user) VALUES('$content','$namaImage','$id_user')");

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

   
</body>
</html>