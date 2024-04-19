
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
      <h1>Manage food category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>manage food">manage food</a></li>
          <li class="breadcrumb-item active">Manage food categoery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage food category</h5>
       
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">image</th>
                    <th scope="col">Name</th>
                    <th scope="col">discription</th>
                    <th scope="col">price</th>
                    <th scope="col">offer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    
                    <td>image</td>
                    <td>breakfast</td>
                    <td>bread,tea,coffee</td>
                    <td>159</td>
                    <td>99</td>
                  </tr>
             
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
