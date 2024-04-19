
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table mt-5 p-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Register Form</h2>
          <p>100% secure <span>and data</span>safe With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-7 ms-5 align-items-center reservation-form-bg">
            <form method="post" enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="100">
                

            <div class="col-lg-12 col-md-12">
                  <input type="file" class="form-control" name="img" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                  <div class="validate"></div>
                </div>
                
                <div class="col-lg-12 col-md-12 mt-3">
                  <input type="text" class="form-control" name="name" id="email" placeholder="Your Name" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
            <div class="col-lg-12 col-md-12 mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>

                <div class="col-lg-12 col-md-12 mt-3">
                  <input type="password" class="form-control" name="pass" id="email" placeholder="Your Password" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>

                <div class="col-lg-12 col-md-12 mt-3">
                  <input type="password" class="form-control" name="cpass" id="email" placeholder="Your Confirm Password" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>

                <div class="col-lg-12 col-md-12 mt-3">
                  <input type="text" class="form-control" name="phone" id="email" placeholder="Your Phone" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                

                <div class="col-lg-12 col-md-12 mt-3">
                  <textarea  class="form-control" name="address" id="email" placeholder="Your Address" data-rule="email" data-msg="Please enter a valid email"></textarea>
                  <div class="validate"></div>
                </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div> -->
              <div><button type="submit" name="reg" class="btn btn-sm btn-danger bg-danger mt-2">SignUp</button>
            
            </div>
            <div>
            <b>Already have an account ?<a href="<?php echo $mainurl;?>login">Login</a></b>
          </div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->
