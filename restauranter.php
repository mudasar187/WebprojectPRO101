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
              <div class="category-box active">
                <img width="250" height="250" src="img/kategoribilder/restaurant.jpg"/>
                <div class="overlay red"></div>
                <h3>Restauranter</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
            <div class="arrow red"></div>

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
            <img width="250" height="250" src="img/restauranter/restaurant%20lacrepe.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">La Crepe </h2>
            <p class="category-description">Et tradisjonelt creperie. Lett å finne og veldig mange varianter på menyen at du har nok til å teste noe nytt hverdag i ukeshvis. Folk kommer alltid her for lunsj og middag. Oftest best med noen andre. </p>
            <p class="category-phone"><strong>Tlf:</strong> Ukjent</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 28, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 10.30-20.00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 10.30-20.00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 10.30-20.00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 10.30-20.00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 10.30-20.00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 10.00-18.00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> Stengt</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restaurantdognvill.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Døgnvill</h2>
            <p class="category-description">Et Amerikansk insperert restaurant. Døgnvill er kjent for sine nydelige og deilige burgere. Det finnes også masse annet enn burger på menyen. Gode øl og atmosphæren er</p>
            <p class="category-phone"><strong>Tlf:</strong> 21 38 50 10</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 12, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 12:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 12:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 12:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 12:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 12:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 12:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 12:00 - 23:00</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restaurantferro.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Ristorante Ferro </h2>
            <p class="category-description">Ristorante Ferro er del av Scandic Vulkan nær Grünerløkka i Oslo, og tilbyr italiensk mat laget med kjærlighet for den sydeuropeiske matkunsten. Her blandes kvalitetsråvarer med godt håndverk for å skape rene smaker og ekte italiensk stemning.</p>
            <p class="category-phone"><strong>Tlf:</strong> 21 05 71 34</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 13, 0175 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 17:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 17:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 17:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 17:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 17:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 13:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> STENGT</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restauranthandwerk.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Handwerk </h2>
            <p class="category-description">Et lite bakeri som har focus på å bruke økologiske råvarer. Du finner ikke industrielle gjær i bakavarene de lager. men som sagt, det er er lite sted så det er bedre at du tar med.</p>
            <p class="category-phone"><strong>Tlf:</strong> 22 60 85 00</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 15 E, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 07:00 - 16:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 07:00 - 16:00</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restaurantkontrast.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Kontrast </h2>
            <p class="category-description">Kontrast leverer mat på Michelin-nivå. De er en moderne skandinavisk restaurant med fokus på kortreiste råvarer i sesong. Prisen er ganske høyt siden det er en høy qvalitets restaurant. Kan være et nydelig sted å gå på date for de som har råd.</p>
            <p class="category-phone"><strong>Tlf:</strong> 21 60 01 01</p>
            <p class="category-address"><strong>Adresse:</strong> Maridalsveien 15a, 0175 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> STENGT &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 6:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 6:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 6:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 6:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 6:00 - 01:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> STENGT</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restaurantluckybird.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Luckybird </h2>
            <p class="category-description">På Luckybird finner du så si alt du vil ha på en fredags kveld. De har god mat, godt øl og fantastiske cocktails med hyggelige priser. De serverer Amerikansk mat med en liten touch av Southern. Porsjonene er veldig generøse. </p>
            <p class="category-phone"><strong>Tlf:</strong> 23 89 68 66</p>
            <p class="category-address"><strong>Adresse:</strong> Vulkan 7, 0175 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> 15:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 15:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 15:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 15:00 - 23:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 12:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 12:00 - 00:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 12:00 - 23:00</li>
            </ul>
          </div> <!-- .category-info -->

        </div> <!-- .category-content -->
          
          <div class="category-content">

          <div class="category-image">
            <img width="250" height="250" src="img/restauranter/restaurantmathallen.jpg"/>
          </div>
          <div class="category-info">
            <h2 class="category-title">Mathallen </h2>
            <p class="category-description">Mathallen Oslo er en arena for unike smaksopplevelser med det beste av norsk og internasjonal mat, mennesker og atmosfære, og et samlingspunkt for mattradisjoner og mattrender. Det er så mye typer mat og drikke som finnes her at du vet ikke hvor du skal starte engang.</p>
            <p class="category-phone"><strong>Tlf:</strong> 400 01 209</p>
            <p class="category-address"><strong>Adresse:</strong>  Vulkan 5, 0178 Oslo</p>
            <ul class="list-inline">
              <li><strong>Mandag:</strong> STENGT &nbsp;&nbsp;|</li>
              <li><strong>Tirsdag:</strong> 10:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Onsdag:</strong> 10:00 - 19:00 &nbsp;&nbsp;|</li>
              <li><strong>Torsdag:</strong> 11:00 - 18:00 &nbsp;&nbsp;|</li>
              <li><strong>Fredag:</strong> 10:00 - 22:00 &nbsp;&nbsp;|</li>
              <li><strong>Lørdag:</strong> 10:00 - 22:00 &nbsp;&nbsp;|</li>
              <li><strong>Søndag:</strong> 11:00 - 19:00 </li>
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
      <div class="col-md-6 commentajax" >
        <h3>Les kommentarer</h3>
        <?php
          $sql="SELECT * from comments where page='restauranter'";
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
        <form id="enquiry">
          <div class="form-group">
              <input type="text" name="name" class="form-control" id="navn" placeholder="Navn">
              <input type="hidden" name="page" value="restauranter" />
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
