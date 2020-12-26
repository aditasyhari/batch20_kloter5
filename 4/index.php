<?php 
    include_once("config/conn.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dumbways.id</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/core-style.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-content-wrapper d-flex clearfix">

        <div class="mobile-nav">
            <div class="amado-navbar-brand">
                <a href="index.html">DUMBWAYS</a>
            </div>
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <header class="header-area clearfix">
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <div class="logo">
                <a href="index.html">DUMBWAYS</a>
            </div>
            <nav class="amado-nav">
                <ul>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li>
                            <p class="navbar-text">
                                <strong>Welcome!</strong>
                                <strong><?php echo $_SESSION['username']; ?></strong>
                            </p>
                        </li>
                        <li class="active"><a href="index.html" style="color: orange;">Home</a></li>
                        <li>
                            <a href="add.php">
                                Add Product
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">Log Out</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a href="login.php">Login</a>
                            
                        </li>
                        <li class="active"><a href="index.html" style="color: orange;">Home</a></li>
                        <?php }
                    ?>

                </ul>
            </nav>

            <br>
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>

        <div class="products-catagories-area clearfix">
            <!-- <img src="img/bg-img/1.jpeg" alt="" style="width: 100%; height: auto; margin-bottom: 50px;"> -->
            <br>
            <h5 pl-5 mt-5>All Content</h5>
            <div class="amado-pro-catagory clearfix">

            
            <?php 
                $query = mysqli_query($conn, "select * from post_tb inner join users_tb on users_tb.id=post_tb.id_user");

                while($d = mysqli_fetch_array($query)){
                    ?>
                        <div class="single-products-catagory clearfix">
                            <a href="detail.html">
                                <img src="img/post/<?php echo $d['image']; ?>" alt="">
                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <div class="line"></div>
                                    <h4><?php echo $d['content']; ?></h4>
                                    <p class="mt-1">by <?php echo $d['name']; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php 
                }
            ?>

            </div>
        </div>
    </div>

    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <div class="footer-logo mr-50">
                            <a href="index.html">Dumbways</a>
                        </div>
                        <p class="copywrite">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script><a href=""> Dumbways.id</a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <div class="social-info d-flex justify-content-center">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assetsjs/active.js"></script>

</body>

</html>