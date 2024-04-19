<?php 
if(!isset($_SESSION["adminid"]))
{
  echo "<script>
  
  window.location='./';
  
  </script>";
}

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
    <!-- Revenue Card -->
<div class="col-md-3 ms-5 p-2 bg-danger">
<button type="button" class="btn bg-white position-relative">
Total Customer
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
99+
<span class="visually-hidden">unread messages</span>
</span>
</button>
</div>

<div class="col-md-3 ms-5 p-2 bg-success">
<button type="button" class="btn bg-white position-relative">
Total Customer
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
99+
<span class="visually-hidden">unread messages</span>
</span>
</button>
</div>


<div class="col-md-3 ms-5 p-2 bg-primary">
<button type="button" class="btn bg-white position-relative">
Total Customer
<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
99+
<span class="visually-hidden">unread messages</span>
</span>
</button>
</div>

</div><!-- End Sales Card -->

<div class="pagetitle mt-3">
      <h1>Growth views</h1>
      <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </div><!-- End Page Title -->
           



        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
