<?php
  include("header.php");
?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php
                    $about =select("courses");
                    if($about != null);
                    {
                      foreach($about as $row){
                        $id = $row['id'];
                        $classname = $row['classname'];
                        $admissionclass = $row['admissionclass'];
                        $content = $row['content'];
                        $imageurl = $row['imageurl'];

                        echo'
                        
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                              <img src='.$imgpathurl.$imageurl.' class="img-fluid" alt="...">
                              <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                  <h4>'.$classname.'</h4>
                                </div>

                                <h3><a href="admission.php">'.$admissionclass.'</a></h3>
                                <p>'.$content.'</p>
                              </div>
                            </div>
                          </div>
                        ';
                      }
                    }
                  ?>

           <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

  
<?php
  include("footer.php");
?>