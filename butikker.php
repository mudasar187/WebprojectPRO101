<?php
include 'connection/config.php';
/* User authentication */
if(isset($_SESSION['user_id'])){
    include 'header.php';
}else{
  header('Location: login.php');
}

?>


<!-- Content Body -->
<section class="category" style="padding-top: 120px;">

  <div class="container">
      <div class="row">
        <!-- Category Section -->

          <div class="col-md-3">
            <a class="category-link" href="cafe-og-barer.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/cafebar.jpg"/>
                <div class="overlay blue"></div>
                <h3>Cafe/Barer</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

          <div class="col-md-3">
            <a class="category-link" href="restauranter.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/restaurant.jpg"/>
                <div class="overlay red"></div>
                <h3>Restauranter</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

          <div class="col-md-3">
            <a class="category-link" href="butikker.php">
              <div class="category-box active">
                <img width="250" height="250" src="img/kategoribilder/butikker.jpg"/>
                <div class="overlay yellow"></div>
                <h3>Butikker</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
            <div class="arrow yellow"></div>

          </div> <!-- .col -->

          <div class="col-md-3">
            <a class="category-link" href="diverse.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/diverse.jpg"/>
                <div class="overlay green"></div>
                <h3>Diverse</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

      </div> <!-- .row -->
  </div> <!-- .container -->

</section> <!-- .section -->

<!-- Category List Section -->
<section class="catgory-list">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/butikker/butikkergodtlevert.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Godtlevert</h2>
            <p class="category-description">Råvarer og oppskrifter levert rett på døren. Du slipper å handle fordi de leverer råvarene rett hjem på døren din. Du sparer penger og tid. Godtlevert gjør alt det for deg.</p>
            <p class="category-phone"><strong>Tlf:</strong> 815 66 101</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 18, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> ? &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag - Fredag:</strong> ? &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> ?</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/butikker/butikkerrema1000.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">REMA 1000</h2>
            <p class="category-description">Norges ledende dagligvarekjede. REMA 1000 Vulkan ligger på hjørnet ved innkjøringen til parkeringshuset fra Maridalsveien. Det er også adkomst rett fra P-huset med gratis kundeparkering.</p>
            <p class="category-phone"><strong>Tlf:</strong> 22 60 89 08</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 15, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 07:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag - Fredag:</strong> 07:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 08:00 - 21:00 </li>
                <li><strong>Søndag:</strong> STENGT </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/butikker/butikkervitusapotek.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Vitusapotek</h2>
            <p class="category-description">Vitusapotek er en landsdekkende apotekkjede. Du finner alle lovlige legemidler du trenger.</p>
            <p class="category-phone"><strong>Tlf:</strong> 22 46 00 47</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan Depot Maridalsveien 21 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 10:00 - 18:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag - Fredag:</strong> 10:00 - 18:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 10:00 - 15:00 </li>
                <li><strong>Søndag:</strong> 12:00 - 16:00 </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <!-- Legge inn flere mellom-->

      </div> <!-- .col -->

    </div> <!-- .row -->
  </div> <!-- .container -->
</section> <!-- .section -->

<!-- Read Comments -->
<section class="read-comment">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Les kommentarer</h3>
        <?php
          $sql="SELECT * from comments where page='butikker'";
          $result = $conn->query($sql);
          /* counting number of rows from result set */
          if ($result->num_rows > 0) {
            /*fetching data from result set */
            while($row = $result->fetch_assoc()){
              ?>

                <div class="comment">
                  <div class="comment-by">
                    <b><?php echo $row['name']; ?></b>
                  </div> <!-- .comment-by -->
                  <div class="comment-date">
                    <span><?php echo $row['created']; ?></span>
                  </div> <!-- .comment-date -->
                  <br>
                  <?php if($row['rating']==0) { ?>
                    <div class="rating"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==0.5) { ?>
                    <div class="rating"><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==1) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==1.5) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==2) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==2.5) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==3) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==3.5) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==4) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==4.5) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                  <?php } ?>
                  <?php if($row['rating']==5) { ?>
                    <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  <?php } ?>
                  <div class="comment-text">
                    <span><?php echo $row['comment']; ?></span>
                  </div>
                </div> <!-- .comment -->

         <?php  }
              }else{ ?>

                 <div class="comment" ><div class="comment-text"></div></div>
        <?php }
            ?>
       </div> <!-- .col -->
    </div> <!-- .row -->
  </div> <!-- .container -->

</section> <!-- .section -->

<!-- Add a Comment -->
<section class="add-comment">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h3>Legg igjen en kommentar</h3>
        <form id="enquiry" >
          <div class="form-group">
              <input type="text" name="name" class="form-control" id="navn" placeholder="Navn">
              <input type="hidden" name="page" value="butikker" />

          </div>
          <input id="input-21e" value="0" name="rating" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs"
               title="">
          <textarea maxlength="140" name="comment" id="message" placeholder="Skriv kommentar"></textarea>
          <input type="submit" class="bcomment"  value="Legg til kommentar">
        </form>
      </div> <!-- .col -->
    </div> <!-- .row -->
  </div> <!-- .container -->

</section> <!-- .section -->

<?php
  include 'footer.php';
?>































