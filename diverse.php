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
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/butikker.jpg"/>
                <div class="overlay yellow"></div>
                <h3>Butikker</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->

          </div> <!-- .col -->

          <div class="col-md-3">
            <a class="category-link" href="diverse.php">
              <div class="category-box  active">
                <img width="250" height="250" src="img/kategoribilder/diverse.jpg"/>
                <div class="overlay green"></div>
                <h3>Diverse</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
            <div class="arrow green"></div>
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
            <img width="250" height="250" src="img/diverse/diverseBl%C3%A5.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Blå</h2>
            <p class="category-description">En nattklubb som også har konserter. Prisene er nesten det samme som alle nattklubber i Oslo. Det er ikke et sted hvor du sitter og snakker med andre. Stedet er for de som vil virkelig feste. Stort plass for de som liker å danse. </p>
            <p class="category-phone"><strong>E-post:</strong> 	eyvind@blaaoslo.no </p>
            <p class="category-address"><strong>Adresse:</strong> Brenneriveien 9, 0182 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversedansenshus.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Dansens Hus</h2>
            <p class="category-description">Dansens Hus er Norges nasjonale scene for dans. Vi viser et bredt spekter av dansekunst, fra babyforestillinger til internasjonale gjestespill, fra nye til etablerte norske koreografer.</p>
            <p class="category-phone"><strong>Tlf:</strong> 23 70 94 25</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 1, 0182 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversegallerirom.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">ROM</h2>
            <p class="category-description">ROM er en ideell organisasjon, som viser nyskapende kunst og arkitektur. ROM arangerer utstillinger, forelesninger og konferanser. ROM har etablert seg som en viktig rolle på den norske kunst og arkitektscenen gjennom engasjerende prosjekter.</p>
            <p class="category-phone"><strong>Tlf:</strong> 22 20 88 86</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 3, 0178 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diverseingensteds.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Ingensteds</h2>
            <p class="category-description">Ingnsteds er et stolt gammelt tegleverksbygg som ligger langs Akerselva. Nå har det blitt en nattbar. De spiller masse forskjellige sjanger av musikk. Det er en litt roligere variant av en nattklubb.</p>
            <p class="category-phone"><strong>Tlf:</strong> 922 66 683</p>
            <p class="category-address"><strong>Adresse:</strong> Brenneriveien 9, 0182 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversepshotell.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">PS hotell</h2>
            <p class="category-description">PS-hotellet ligger i en veldig fin, veldig preget av kunst  del av Oslo vekk fra all trafikk eller jernbanestasjonen. Mange fine rom med veldig bra utsikt av byen og du får også deilige og gratis buffe. </p>
            <p class="category-phone"><strong>Tlf:</strong> 23 15 65 00</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 22, 0175 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversescandicvulkan.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Scandic Vilkan</h2>
            <p class="category-description">En moderne hotell i Oslo Vulkan område. Rommene er litt lite men frokost buffeen gjør det litt bedre. De har også en fin og romslig trening senter. Prisen er ganske greie for å bo her. Perfekt å ta når dere er mange eller med familier.</p>
            <p class="category-phone"><strong>Tlf:</strong> 21 05 71 00</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan, Maridalsveien 13A, 0175 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversetorso.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Torso</h2>
            <p class="category-description">Torso fagbutikk for kunst- og tegneutstyr i Oslo. Her finner du alt du trenger til ditt prosjekt. Enten Du er student, hobbymaler eller utøvende kunstner. </p>
            <p class="category-phone"><strong>Tlf:</strong> 21 38 80 70</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 38, 0178 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/diverse/diversevulkanarena.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Vulkan Arena</h2>
            <p class="category-description">Vulkan Arena er en av Norges beste intimarena. Det er plass til over 600 mennesker. Arenaen er egnet for møter, konferanser, workshops, seminarer, kongresser, men også visninger, kick-off, messer, selskaper og konserter. Eventer kan du eventuelt sjekke på demmes nettside. </p>
            <p class="category-phone"><strong>Tlf:</strong> 401 47 129</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 26, 0175 Oslo</p>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->

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
          $sql="SELECT * from comments where  page='diverse'";
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
              <input type="hidden" name="page" value="diverse" />
          </div>
          <input id="input-21e" value="0" name="rating" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs"
               title="">
          <textarea maxlength="140"  name="comment" id="message" placeholder="Skriv kommentar"></textarea>
          <input type="submit" class="bcomment"  value="Legg til kommentar">
        </form>
      </div> <!-- .col -->
    </div> <!-- .row -->
  </div> <!-- .container -->

</section> <!-- .section -->

<?php
  include 'footer.php';
?>
