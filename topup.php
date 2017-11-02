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
       <form action="/action_page.php" method="post">
        <tr>
            <th colspan="8">TOPUP</th>
        </tr>
        <tr>
            <td>Pilih Nominal</td>
        </tr>
        <tr>
            <td><button type="button" name="nominal" class="btn btnnom" value="50">Rp. 50.000</button></td>
            <td><button type="button" name="nominal" class="btn btnnom" value="100">Rp. 100.000</button></td>
            <td><button type="button" name="nominal" class="btn btnnom" value="250">Rp. 200.000</button></td>
            <td><button type="button" name="nominal" class="btn btnnom" value="300">Rp. 300.000</button></td>
            <td><button type="button" name="nominal" class="btn btnnom" value="500">Rp. 500.000</button></td>
        </tr>
        <tr>
            <td colspan="8">Pilih Nominal Lainnya</td>
        </tr>
        <tr>
            <td colspan="8"><input type="text" name="nominal" size="90"></td>
        </tr>
        <tr>
            <td colspan="8">Pilih Metode Pembayaran Transfer</td>
        </tr>
        </form>
    </table>
</div>

</body>

</html>
