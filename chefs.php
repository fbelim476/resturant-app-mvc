 

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">
        <!-- display chef details from admin -->
        <?php 
         foreach($shwchefdetails as $row)
         {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="admin/<?php echo $row["photo"];?>" class="img-fluid" alt="" style="width:90%; height:250px">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row["name"];?></h4>
                <span><?php echo $row["positions"];?></span>
                <p><?php echo $row["descriptions"];?></p>
                <p><?php echo $row["address"];?></p>
                <p><button type="button" class="btn btn-primary btn-sm">Book now</button></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <?php 
          }
          ?>
          


        </div>

      </div>
    </section><!-- End Chefs Section -->