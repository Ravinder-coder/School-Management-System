<?php
  include("header.php");
?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Teacher</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
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