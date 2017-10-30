<?php include('header.php') ?>

<div class="col-lg-2 profile">
    
        <br>
            <img src="" class="img-rounded" alt="Profile">
        
        <br>
            <?php  if(isset($_SESSION['login_user'])){
                    echo $_SESSION['login_user'];
                } ?>
        <br>
            Rp. 200.000
        <br>
            <button type="button" class="btn btntopup">Topup</button>
        <br>Profil Saya
        <br>Kotak Masuk
        <br>Histori Belanja
       <br>Watchlist
    
</div>


    </body>
</html> 