<?php
error_reporting(0);
include 'connection/config.php'; 
/* User authentication */
if(isset($_SESSION['user_id'])){
    include 'header.php'; 
}else{
  header('Location: login.php');
}

?>

<!-- Half Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/1.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/2.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/3.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/4.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/5.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/6.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/7.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/slider/8.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>

<!-- Content Body -->
<section class="category">

  <div class="container">
      <div class="row">
        <!-- Category Section -->
        <div class="col-md-4">

          <div class="col-md-12">
              <div class="notification">
                <h3>Hei!</h3>
                <h4>Er du ny på Campus?</h4>
                <p>Her kan du utforske nærmiljøet og holde deg oppdatert om kommende eventer fra både ansatte og studenter.</p>
              </div> <!-- .category -->
          </div> <!-- .col -->

          <div class="col-md-12">
            <a class="category-link" href="cafe-og-barer.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/cafebar.jpg"/>
                <div class="overlay blue"></div>
                <h3>Cafe/Barer</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

          <div class="col-md-12">
            <a class="category-link" href="restauranter.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/restaurant.jpg"/>
                <div class="overlay red"></div>
                <h3>Restauranter</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

          <div class="col-md-12">
            <a class="category-link" href="butikker.php">
              <div class="category-box yellow">
                <img width="250" height="250" src="img/kategoribilder/butikker.jpg"/>
                <div class="overlay yellow"></div>
                <h3>Butikker</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->

          <div class="col-md-12">
            <a class="category-link" href="diverse.php">
              <div class="category-box">
                <img width="250" height="250" src="img/kategoribilder/diverse.jpg"/>
                <div class="overlay green"></div>
                <h3>Diverse</h3>
              </div> <!-- .category -->
            </a> <!-- .category-link -->
          </div> <!-- .col -->
        </div> <!-- .col -->

        <!-- Events Section -->
        <div class="col-md-8">
          <div class="section-content">
            <h2 class="section-title">Eventer</h2>
            <h4>Legg inn eventer du planlegger <br>eller få med deg andres eventer nedenfor</h4>
          </div> <!-- .section-content -->
        </div> <!-- .col -->
        
        <div class="col-md-4">
            <div class="employee" style="margin-bottom: 0;">
              <h3 class="employee-title">Ansatte</h3>
              <?php         
        
              /*if user type 1 then employee section otherwise student section */
              if($_SESSION['type']==1){ 

              ?>
              <form action="controller/event.php" method="post">
                <div class="form-group">
                    <input type="text"  name="name" class="form-control" id="navn" placeholder="Navn">
                </div>
                <div class="form-group">
                    <input type="text" name="location" class="form-control" id="sted" placeholder="Sted">
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control" id="dato" placeholder="Dato(dd/mm/yyyy)">
                </div>
                <div class="form-group">
                    <input type="text" name="time" class="form-control" id="tidspunkt" placeholder="Tidspunkt">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3" placeholder="Beskrivelse"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Legg til event</button>
              </form>
              <?php } else{?>
              <form  method="post">
                <div class="form-group">
                    <input type="text"  name="name" disabled="" class="form-control" id="navn" placeholder="Navn">
                </div>
                <div class="form-group">
                    <input type="text" name="location" disabled="" class="form-control" id="sted" placeholder="Sted">
                </div>
                <div class="form-group">
                    <input type="date" name="date" disabled="" class="form-control" id="dato" placeholder="Dato(dd/mm/yyyy)">
                </div>
                <div class="form-group">
                    <input type="text" name="time"  disabled="" class="form-control" id="tidspunkt" placeholder="Tidspunkt">
                </div>
                <div class="form-group">
                    <textarea class="form-control" disabled="" name="description" rows="3" placeholder="Beskrivelse"></textarea>
                </div>
                <button type="submit" class="btn btn-default" disabled="">Legg til event</button>
              </form>


              <?php } ?>
            </div> <!-- .employee -->

            <div class="employee-events">
            <?php 
              $sql="SELECT * from events where user_id=1";
              $result = $conn->query($sql);
              /* counting number of rows from result set */
              if ($result->num_rows > 0) {
                /*fetching data from result set */
                while($row = $result->fetch_assoc()){
                  $date1=str_replace('/', '-', $row['date']);
                    $today = (new DateTime())->format('d-m-Y'); //use format whatever you are using
                    $expiry = (new DateTime($date1))->format('d-m-Y');
                  if(strtotime($expiry) >= strtotime($today) ){
                  ?>
                  <ul class="list-unstyled">
                    <li><strong>Navn:</strong> <span><?php echo $row['name']; ?></span></li>
                    <li><strong>Sted:</strong> <span><?php echo $row['location']; ?></span></li>
                    <li><strong>Dato:</strong> <span><?php echo $row['date']; ?></span></li>
                    <li><strong>Tidspunkt:</strong> <span><?php echo $row['time']; ?></span></li>
                    <li><strong>Beskrivelse:</strong> <span><?php echo $row['description']; ?></span></li>
                  </ul>
                  <hr>
         <?php  }else{
                     $sql="DELETE from events where id=".$row['id'];
                     if($conn->query($sql)){
                       $refresh=1;
                     }
                    
                }
              }
            }
            if(isset($refresh)){
               header('Location:index.php');
            }
            ?>
            </div> <!-- .employee-events -->
        </div> <!-- .col -->
        
        <div class="col-md-4">
            <div class="employee"  style="margin-bottom: 0;">
              <h3 class="employee-title">Studenter</h3>
              <?php         
        
              /*if user type 2 then student section otherwise employee section */
              if($_SESSION['type']==2){ 

              ?>
              <form action="controller/event.php" method="post">
                <div class="form-group">
                    <input type="text"  name="name" class="form-control" id="navn" placeholder="Navn">
                </div>
                <div class="form-group">
                    <input type="text" name="location" class="form-control" id="sted" placeholder="Sted">
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control" id="dato" placeholder="Dato(dd/mm/yyyy))">
                </div>
                <div class="form-group">
                    <input type="text" name="time" class="form-control" id="tidspunkt" placeholder="Tidspunkt">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3" placeholder="Beskrivelse"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Legg til event</button>
              </form>
              
               <?php } else{?>
              <form  method="post">
                <div class="form-group">
                    <input type="text"  name="name" disabled="" class="form-control" id="navn" placeholder="Navn">
                </div>
                <div class="form-group">
                    <input type="text" name="location" disabled="" class="form-control" id="sted" placeholder="Sted">
                </div>
                <div class="form-group">
                    <input type="date" name="date" disabled="" class="form-control" id="dato" placeholder="Dato(dd/mm/yyyy)">
                </div>
                <div class="form-group">
                    <input type="text" name="time"  disabled="" class="form-control" id="tidspunkt" placeholder="Tidspunkt">
                </div>
                <div class="form-group">
                    <textarea class="form-control" disabled="" name="description" rows="3" placeholder="Beskrivelse"></textarea>
                </div>
                <button type="submit" class="btn btn-default" disabled="">Legg til event</button>
              </form>


              <?php } ?>
            </div> <!-- .employee -->

            <div class="employee-events">
              <?php  
              $sql="SELECT * from events where user_id=2";
              $result = $conn->query($sql);
              /* counting number of rows from result set */
              if ($result->num_rows > 0) {
                /*fetching data from result set */
                while($row = $result->fetch_assoc()){
                 $date1=str_replace('/', '-', $row['date']);
                    $today = (new DateTime())->format('d-m-Y'); //use format whatever you are using
                    $expiry = (new DateTime($date1))->format('d-m-Y');
                  if(strtotime($expiry) >= strtotime($today) ){
                  ?>
                  <ul class="list-unstyled">
                    <li><strong>Navn:</strong> <span><?php echo $row['name']; ?></span></li>
                    <li><strong>Sted:</strong> <span><?php echo $row['location']; ?></span></li>
                    <li><strong>Dato:</strong> <span><?php echo $row['date']; ?></span></li>
                    <li><strong>Tidspunkt:</strong> <span><?php echo $row['time']; ?></span></li>
                    <li><strong>Beskrivelse:</strong> <span><?php echo $row['description']; ?></span></li>
                  </ul>
                  <hr>
         <?php  }else{
                    
                     $sql="DELETE from events where id=".$row['id'];
                     if($conn->query($sql)){
                       $refresh=1;
                     }
                }
                }
              }
              if(isset($refresh)){
               header('Location:index.php');
            }
            ?>

            </div> <!-- .employee-events -->
        </div> <!-- .col -->
       
      </div> <!-- .row -->
  </div> <!-- .container -->

</section> <!-- .section -->


<?php
  include 'footer.php';
?>
