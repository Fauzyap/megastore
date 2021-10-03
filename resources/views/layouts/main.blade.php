<!-- navbar -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Mega Games Store</title>
    <link rel="icon" href="img/ico/favicon.jpg">
  </head>
  <body>
    @include('partials.navbar')

    <div class="page-wrapper">
      @yield('page-wrapper')
    </div>


    <!-- footer -->
    <footer class="footer-distributed">
 
        <div class="footer-left">
        
        <img src="img/Mega_games.png" alt="">
        
        <p class="footer-links">
          Tempat pembayaran terpercaya di dunia dengan rating tertinggi No.1 dengan sistem pembelian yang tidak merepotkan, platform top-up terbesar untuk game. Kami menerima semua jenis pembayaran dan menawarkan 10.000+ judul game.
        </p>
        
        
        </div>
        
        <div class="footer-center">
        
          <div>
          
          <p class="text-end"><a href="{{ url('terms') }}" class="contact mr-2 center-foot text-end">Website Terms and Conditions</a></p>
          </div>
          
          <div>
          
          <p class="text-end"><a href="{{ url('terms') }}" class="contact mr-2 center-foot text-end">User Terms & Conditions</a></p>
          </div>
          
          <div>
          
          <p class="text-end"><a href="{{ url('terms') }}" class="contact mr-2 center-foot text-end">Privacy Policy</a></p>
          </div>
          
          </div>
          
            
          <div class="footer-right">
          <p class="footer-company-about contact">
          <span >Butuh bantuan?</span>
                <img src="img/ico/email-ico.svg" alt="">
                <a href="mailto: megagames@gmail.com" class="contact mr-2">Email : megagames@gmail.com</a>
                <br>
                <img src="img/ico/phone-ico.svg" alt="">
                <a href="https://wa.me/087782586570" class="contact mr-2">Hotline 1 : 087782586570</a>
                <br>
                <img src="img/ico/phone-ico.svg" alt="">
                <a href="https://wa.me/0851-5528-5010"class="contact mr-2">Hotline 2 : 0851-5528-5010</a>
          <div class="footer-icons">
          
            <p class="footer-company-name">&copy; 2021 hak cipta team</p>
          
          </div>
          
          </div>
        
        </footer>
      
      
      <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
      <script src="js/script.js"></script>
      <script src="js/suggestions.js"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->
    </body>
    
  </html>