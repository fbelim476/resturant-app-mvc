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
      <h1>Manage All Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
          <li class="breadcrumb-item active">Manage Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Customers</h5>
       
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Age</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    
                    <td>Neha</td>
                    <td>Neha</td>
                    <td>Patel</td>
                    <td>22</td>
                    <td>1.jpg</td>
                    <td>Rajkot</td>
                    <td>921212121</td>
                    <td>Gujrat</td>
                    <td>Junagad</td>
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
