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
              <div class="category-box active">
                <img width="250" height="250" src="img/kategoribilder/cafebar.jpg"/>
                <div class="overlay blue"></div>
                <h3>Cafe/Barer</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
            <div class="arrow blue"></div>

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
              <div class="category-box yellow">
                <img width="250" height="250" src="img/kategoribilder/butikker.jpg"/>
                <div class="overlay yellow"></div>
                <h3>Butikker</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
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
            <img width="250" height="250" src="img/cafe-barer/cafebarBarvulkan.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">BAR Vulkan</h2>
            <p class="category-description"> Bar Vulkan er både Bar og restaurant som ligger i samme lokale. De tilbyr en helaften, eller en hel dag med deilig mat og vin, spennende cocktails og musikk utover kvelden. De har veldig mye variasjon på mat og drikke så det passer for alle anledninger.</p>
            <p class="category-phone"><strong>Tlf:</strong> 940 08 182</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 9, 0178 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> Stengt &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 17:00-00:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 17:00-00:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 17:00-00:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 16:00-00:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 16:00-00:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> Stengt </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
           <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/cafebarbrenneriet.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Brenneriet</h2>
            <p class="category-description">En hyggelig og lite cafe med flinke baristaer. De er veldig populær blant lunsjgjester for sine bakevarer og forskjellig type kaffe. De har gratis Wi-fi og rimelig billige priser.</p>
            <p class="category-phone"><strong>Tlf:</strong> 941 48 780</p>
            <p class="category-address"><strong>Adresse:</strong> Brenneriveien 5, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 08:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 08:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 08:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 08:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 08:00 - 15:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> Stengt &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> Stengt &nbsp;&nbsp;|</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/cafebarfyrhuset.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Fyrhuset Kuba</h2>
            <p class="category-description">Fyrhuset er et lite orasnje hus som ligger kuba parken. Her kan du kose deg men en kopp med kaffe eller et glass med iskald øl. Det finnes shuffleboards i andre etasjen.</p>
            <p class="category-phone"><strong>Tlf:</strong> Ukjent</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 19, Maridalsveien 19, 0175 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 15:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 15:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 15:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 15:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 15:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 15:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> Stengt</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/cafebarpokalen.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Pokalen</h2>
            <p class="category-description">En sports pub og møtested for sportentusiaster og ølhunder. De viser kamper fra Premier League og Champions League til ishockey, hoppren og mange annet idrett. Finnes også noen ping-pong bord der for de som er interessert.</p>
            <p class="category-phone"><strong>Tlf:</strong> 401 47 129</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 26, 0175 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> Stengt&nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 18:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 18:00 - 01:00  &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 18:00 - 01:00  &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 17:00 - 03:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 13:00 - 03:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 13:00 - 00:00 </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/cafebarsovnlos.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Søvnløs Bar</h2>
            <p class="category-description">Et Amerikansk restaurant i Oslo. De er kjent for sine deilige og saftige burgere. Perfekt sted for en drink mens man venter på maten eller bare ta en øl med venner. Overalt et bra sted å starte kvelden på. </p>
            <p class="category-phone"><strong>Tlf:</strong> 21 38 50 10</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 12, 0178 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> Stengt &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> Stengt &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 18:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 18:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 17:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 14:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 14:00 - 22:00 </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/carebarhendixibsenjunior.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Hendrix Ibsen Junior</h2>
            <p class="category-description">Et lite kaffebar som ligger på Vulkan Depot(et slags senter). Her finner du kaffe fra våre favorit brennerier. Supreme Roastworks, Tim Wendelboe, Kaffa, og masse fler. Siden det er så liten så er det vanlig å bestille der og ta med.</p>
            <p class="category-phone"><strong>Tlf:</strong> 45797150</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 5, 0182 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 07:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 07:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 07:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 07:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 07:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 10:00 - 17:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> Stengt </li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/cafe-barer/hendrixibsen.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Hendrix Ibsen</h2>
            <p class="category-description">En veldig romslig kafe og serverer også øl. Her kan du kjøpe kule vinyler og forskjellige bøker. Du kan også spille brettspill. Fantastisk miljø og et veldig bra sted hvis dere er mange.</p>
            <p class="category-phone"><strong>Tlf:</strong> 22 40 40 00</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 16, 0178 Oslo </p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 08:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 08:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 08:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 08:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 08:00 - 03:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 09:00 - 03:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 10:00 - 23:00</li>
            </ul>
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
          $sql="SELECT * from comments where page='cafe'";
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
              <input type="hidden" name="page" value="cafe" />
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