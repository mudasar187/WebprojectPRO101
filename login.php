
<?php
  include 'header.php';
?>


<!-- Top page countent -->
<header class="about">
 <div class="head-content">
    <h1 class="text-center">LOGG INN</h1>
    </div>
    
    
    
</header>

<!-- Login -->
<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-5 col-sm-12">
        <form  action="controller/login.php" method="post">
          <div class="form-group"><input type="email" required="" name="email" placeholder="E-postadresse" /></div>
          <div class="form-group"><input type="password" required="" name="password"  placeholder="Passord" /></div>
          <div class="col-md-4"><input type="submit" value="LOGIN" class="btn btn-primary" /></div>
        </form>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container -->
</section> <!-- .section -->
          
          
<?php
    include 'footer.php';
?>