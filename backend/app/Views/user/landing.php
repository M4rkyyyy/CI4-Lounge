<!DOCTYPE html>
<html lang="en">
<head>
   <title>Home - Epic Quest Games</title>
   <?=view('components/head')?>
</head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
<?=view('components/button')?>
  <!-- ***** Header Area End ***** -->

  <?=view('components/landing_main_banner')?>

   <?=view('components/footer')?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
<?=view('components/javascript')?>

  </body>
</html>