<?php 
if(!isset($_SESSION["adminid"]))
{
  echo "<script>
  
  window.location='./';
  
  </script>";
}

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add food</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>add food">add food</a></li>
          <li class="breadcrumb-item active">Add food</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
      
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
           
              <!-- Vertical Form -->
              <form class="row g-3">
              <div class="col-12">
                  <label for="inputNanme4" class="form-label">strters</label>
                  <input type="file" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">break fast</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">lunch</label>
                  <select name="positions"  class="form-control" id="inputEmail4">
                    <option value="">-select Positions-</option>
                    <option value="1">Master chef</option>
                    <option value="1">Assistant chef</option>
                    <option value="1">Cook</option>                    
                  </select>
                </div>
             
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">dinner</label>
                  <textarea name="descriptions" class="form-control" id="inputNanme4"></textarea>
                </div>
                
                <div class="">
                  <button type="submit" class="btn btn-primary">Add Chefs</button>
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
