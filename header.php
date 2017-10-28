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