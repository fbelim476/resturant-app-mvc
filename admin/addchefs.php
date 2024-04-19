<?php 
if(!isset($_SESSION["adminid"]))
{
  echo "<script>
  
  window.location='./';
  
  </script>";
}

?>
<!-- bvalidator validations of jquery -->

  <!-- jquery bvalidator CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="assets/js/jquery.bvalidator.min.js"></script>
<script src="assets/js/default.min.js"></script>
<script src="assets/js/gray.js"></script>
<script>
$(document).ready(function(){

  $("#addchef").bValidator();
});
</script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Chefs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Add Chefs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
      
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
           
              <!-- Vertical Form -->
              <form enctype="multipart/form-data" id="addchef" method="post" class="row g-3">
              <div class="col-12">
                  <label for="inputNanme4" class="form-label">Upload Photo</label>
                  <input type="file" name="img" class="form-control" data-bvalidator="required" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" name="chefname" data-bvalidator="required,alpha" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Select Positions</label>
                  <select name="positions" data-bvalidator="required"  class="form-control" id="inputEmail4">
                    <option value="">-select Positions-</option>
                    <?php 
                    foreach($chefposition as $chefposition1)
                    {
                    ?>
                    <option value="<?php echo $chefposition1["positionid"];?>"><?php echo $chefposition1["positions"];?></option>
                    <?php 
                    }
                    ?>
                           
                  </select>
                </div>
             
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Descriptions</label>
                  <textarea name="descriptions" data-bvalidator="required" class="form-control" id="inputNanme4"></textarea>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" name="address" data-bvalidator="required" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="">
                  <button type="submit" name="add_chef" class="btn btn-primary">Add Chefs</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
