<?php
  include("header.php");
?>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white" style="margin-top:25px;">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-3 text-white px-1 news" style="width:200px;"><span class="d-flex align-items-center">&nbsp; Announcement</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> 
                  <?php
                    $announcement =select("announcement");
                    if($announcement != null);
                    {
                      foreach($announcement as $row){
                        $id = $row['id'];
                        $stu_announcement = $row['announcement'];

                        echo'<a href="">'.$stu_announcement.'</a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;';
                      }
                    }
                  ?>
                 </marquee>
            </div>
        </div>
    </div>
</div>

  <!-- ======= Hero Section ======= -->
  <section  id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <?php
                    $homeimage =select("homeimage");
                    if($homeimage != null);
                    {
                      foreach($homeimage as $row){
                        $id = $row['id'];
                        $title = $row['title'];
                        $imageurl = $row['imageurl'];

                        echo' <h2>'.$title.'</h2>';
                      }
                    }
                  ?>
     
      <a href="courses.php" class="btn-get-started">Get Started</a>
    </div>
    <div  class="col-md-3" style="background-color:white; height:250px; width:250px; margin-right:15px;">
    <h1 style="background-color:#5fcf80; color:white; text-align:center; font-size: 35px;"> Latest News </h1>
    <marquee style="position:relative;height:150px;" scrollamount="3" direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
    <?php
                    $latestnews =select("latestnews");
                    if($latestnews != null);
                    {
                      foreach($latestnews as $row){
                        $id = $row['id'];
                        $stu_latestnews = $row['latestnews'];

                        echo'<a style="padding: 6px;" href="#">'.$stu_latestnews.'</a> <br> <br>';
                      }
                    }
                  ?>
    </marquee>
   </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          
          <?php
                    $about =select("about");
                    if($about != null);
                    {
                      foreach($about as $row){
                        $id = $row['id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $features = $row['features'];
                        $imageurl = $row['imageurl'];

                        echo'
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                          <img src='.$imgpathurl.$imageurl.' class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>'.$title.'</h3>
                        <p class="font-italic">
                          '.$content.'
                        </p>
                        <ul>
                          <li><i class="icofont-check-circled"></i>'.$features.'</li>
                        </ul> ';
                      }
                    }
                  ?>
            <a href="about.php" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1232</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

   

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <!--div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div-->
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Teacher</h2>
          <p>Our Professional Teacher</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
                    $latestnews =select("trainers");
                    if($latestnews != null);
                    {
                      foreach($latestnews as $row){
                        $stu_id    = $row['id'];
				    					  $name = $row['name'];
                        $profession = $row['profession'];
                        $description = $row['description'];
				    					  $imageurl  = $row['imageurl'];

                        echo'<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                        <img src='.$imgpathurl.$imageurl.' class="img-fluid" alt="">
                          <div class="member-content">
                            <h4>'.$name.'</h4>
                            <span>'.$profession.'</span>
                            <p>
                              '.$description.'
                            </p>
                            <div class="social">
                              <a href=""><i class="icofont-twitter"></i></a>
                              <a href=""><i class="icofont-facebook"></i></a>
                              <a href=""><i class="icofont-instagram"></i></a>
                              <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>';
                      }
                    }
                  ?>
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

<?php
  include("footer.php");
?>