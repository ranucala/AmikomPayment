<?php
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-default navbar-static-top">
        <div>
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-brand" href="#">
                    <img class="logo" alt="Brand" src="img/navbar/navbar/logo.png">
                  </a>
                </li>

                <li>
                    <form class="search">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Cari menu yang kalian suka" />
                        </div>
                    </form>
                </li>

                <li>
                    <button type="submit" name="search" class="btn btn-search">
                        </button>
                </li>
        <?php
//                sesudah login
                if(isset($_SESSION['login_user'])){
                    echo $_SESSION['login_user'];
                    echo "<a href='logout.php'>Logout</a>";
                }
                else
//                 sebelum login
                echo '<li class="dropdown">
                    <button type="button" name="login" class="btn btn-login dropdown-toggle" data-toggle="dropdown">
                        </button>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" role="form" method="post" action="login.php" id="login-nav">
                                        <div class="form-group inner-addon left-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                            <label class="sr-only">NPM or NIK</label>
                                            <input name="identity" type="text" class="form-control" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group inner-addon left-addon">
                                            <i class="glyphicon glyphicon-lock"></i>
                                            <label class="sr-only">Password</label>
                                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block btn-login1">LOGIN</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>';
?>
            </ul>
        </div>
    </nav>
    <!--carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="img/carousel/carousel/gambar.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>The New of 2017</p>
                        <h3>Grapefruit infused + tequila cocktail</h3>
                        <img src="img/carousel/carousel/rating.png" />
                        <br><br>
                        <button type="submit" name="pesan" class="btn btn-pesan">
                        </button>
                    </div>
                </div>
            </div>
            <!--
            <div class="item">
                <img class="second-slide" src="img/bali.jpg" alt="Second slide" data-interval="2000">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="index.html" role="button"></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/raja_ampat.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="about.html" role="button"></a></p>
                    </div>
                </div>
            </div>
-->
        </div>
    </div>
    <!--Kategory-->
    <div id="main-menu">
        <div class="list-group panel">
            <span class="kategory">Kategory</span>
            <a href="#demo1" class="list-group-item list-group-item-success strong" data-toggle="collapse" data-parent="#MainMenu"> Makanan <i class="fa fa-caret-down"></i></a>
            <div class="collapse list-group-submenu" id="demo1">
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Audio Content</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Interactive Media</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Learning Game</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Video</a>
            </div>
            <a href="#demo2" class="list-group-item list-group-item strong" data-toggle="collapse" data-parent="#MainMenu"> Minuman <i class="fa fa-caret-down"></i></a>
            <div class="collapse list-group-submenu" id="demo2">
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; 1</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; 2</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; 3</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; 4</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; 5</a>
            </div>
            <a href="#demo4" class="list-group-item list-group-item strong" data-toggle="collapse" data-parent="#MainMenu"> Cemilan<i class="fa fa-caret-down"></i></a>
            <div class="collapse list-group-submenu" id="demo4">
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; English</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Chinese</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; French</a>
            </div>
            <a href="#demo5" class="list-group-item list-group-item strong" data-toggle="collapse" data-parent="#MainMenu"> Permen <i class="fa fa-caret-down"></i></a>
            <div class="collapse list-group-submenu" id="demo5">
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; ARKive</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; BrainPOP Junior</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; CK-12</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Khan Academy</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Library of Congress</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; NCTM Illuminations</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; PBS</a>
                <a href="#" class="list-group-item"><input type="checkbox">&nbsp; Teach Engineering</a>
            </div>
        </div>
    </div>

</body>

</html>
