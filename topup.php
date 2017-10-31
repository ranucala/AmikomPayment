<?php include('header.php') ?>
<div class="profile">

    <span class="profile-center"><br>
    <img src="" class="img-rounded" alt="Profile">

    <br>
    <p><?php  if(isset($_SESSION['login_user'])){
                    echo $_SESSION['login_user'];
                } ?>
    
    <br><br> Rp. 200.000
    <br><br>
    <button type="button" class="btn btntopup">Topup</button></p>
    </span>
    <br><br>Profil Saya
    <br><br>Kotak Masuk
    <br><br>Histori Belanja
    <br><br>Watchlist

</div>
<div class="topup">
    <table>
        <tr>
            <th>TOPUP</th>
        </tr>
        <tr>
            <td>Pilih Nominal</td>
        </tr>
        <tr>
            <td><button type="button" class="btn btnnom">50.000</button></td>
            <td><button type="button" class="btn btnnom">100.000</button></td>
            <td><button type="button" class="btn btnnom">200.000</button></td>
            <td><button type="button" class="btn btnnom">300.000</button></td>
            <td><button type="button" class="btn btnnom">500.000</button></td>
        </tr>
    </table>
</div>

</body>

</html>
