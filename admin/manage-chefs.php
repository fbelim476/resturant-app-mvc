
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
  <h1>Manage chefs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item active">Manage Chefs</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Chefs</h5>
   
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Positions</th>
                <th scope="col">Address</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Action</th>
             </tr>
            </thead>
            <tbody>

            <?php 
             foreach($shwchefdetails as $row)
             {
            ?>
              <tr>
                <th scope="row"><?php echo $row["chefid"];?></th>
                <td><img src="<?php echo $row["photo"];?>" class="img-fluid w-25"></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["positions"];?></td>
                <td><?php echo $row["descriptions"];?></td>
                <td><?php echo $row["address"];?></td>
                <td colspan="2"><div style="min-width:100px"><a href="" class='btn btn-sm bg-danger text-white'><i class="bi bi-trash text-white"></i></a> | <a href="" class='btn btn-sm bg-info text-white'><i class="bi bi-pencil text-white"></i></a></div> </td>
              
              </tr>
         
              <?php 
             }
             ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
