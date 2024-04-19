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
      <h1>Add Food Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Add Food Category</li>
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
                  <label for="inputNanme4" class="form-label">Food Category name *</label>
                  <input type="text" name="foodcategoryname" data-bvalidator="required,alpha" class="form-control" id="inputNanme4">
                </div>
                
                <div class="">
                  <button type="submit" name="add_category" class="btn btn-primary">Add Food Category</button>
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
