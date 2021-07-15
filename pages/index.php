<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Get Ready redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>
 <div class="row">
<div class="col-12 col-md-12 p-3 p-md-5 text-center">

        <img src="../img/baker.png" width="200">
<p>Welcome to fun resto app modern point of sale for small restaurant with simple system
<br/>Get started : You can create databased user , staff , table , menus , and create transaction point of sale , including report list detail transaction.
<br/>Integration : Fun Resto App can connected with scanner barcode for food and drink shop, just plug and play this apps can you use with scanner barcode, support receipt print via clouds printer all receipt printer support.
<br/>Systema : Offline mode installation with local server on desktop computer, or use online mode with installation this apps on clouds,with online mode you can use this application on multi device like smartphone android iphone windows and other OS.
</p>
<a href="" class="btn btn-info">Read Documentation</a>
<br/><br/>
<div class="row">
        <div class="col-6 col-md-6 p-3">
  <div class="border p-3 p-md-5 rounded bg-dark text-white">
<h3>DONATION</h3>
<p>
If our application help your bussiness, you can contribute with share this apps on social media, or create donation to our team dev, with your donation can be help us for develope new modern web app again.        
<br/>use money transfer like western union or moneygram and sent donation to we local bank account.
<br/>BANK CENTRAL ASIA
<br/>ACCOUNT NO : 0181884109
<br/>ACCOUNT NAME : SUCI CHANIFAH
<br/>IBAN/SWIFT CODE : CENAIDJA
</p>
</div>
</div>
<div class="col-6 col-md-6 p-3">
<div class="border p-3 p-md-5 rounded">
<h3>About Apps</h3>
<p>
Fun Resto Web Apps, is a free and open source code point of sale, you can download and use for help your bussiness.
</p>
<p>
Develope by axcora technology team you can visit our site and blog source code and social media on <br/><a href="https://axcora.com">https://axcora.com</a> <br/>
<a href="https://www.hockeycomputindo.com">https://www.hockeycomputindo.com</a> <br/> <a href="https://mesinkasironline.web.app">https://mesinkasironline.web.app</a>
<br/><a href="https://www.youtube.com/c/bakoelraksupermarketMesinKasir/videos">Youtube Chanel</a>
<br/><a href="https://fb.com/mesinkasircomplete">Facebook Page</a>
</p>
</div>
</div>
</div>
</div>

          </div>

<?php
include'../includes/footer.php';
?>