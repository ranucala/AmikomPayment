<?php include('header.php'); ?>
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
