
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar shadow-lg">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo $mainurl;?>admin-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="<?php echo $mainurl;?>manage-customer">
          <i class="bi bi-menu-button-wide"></i><span>Manage Customers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
</li>
        

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Chefs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl;?>addchefs">
              <i class="bi bi-circle"></i><span>Add Chefs</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $mainurl;?>manage-chefs">
              <i class="bi bi-circle"></i><span>Manage Chefs</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav --->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav4" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Food Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl;?>addfood-category">
              <i class="bi bi-circle"></i><span>Add Food Category</span>
            </a>
          </li>
          <li>
            <a href="<?php echo $mainurl;?>manage-foodcategory">
              <i class="bi bi-circle"></i><span>Manage Food category</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav --->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Food Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Add Food Category</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Manage Food Category</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav --->
    
      <li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
</li>



<li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Order</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
</li>

<li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Review</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
</li>



<li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <i class="bi bi-menu-button-wide"></i><span>Logout </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
</li>
   



    </ul>

  </aside><!-- End Sidebar-->
