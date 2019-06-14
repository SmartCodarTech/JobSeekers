  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower/dist/img/images.jpeg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href=""><i class="fa fa-fighter-jet"></i> <span>Officers Management</span></a></li>
         <li><a href=""><i class="fa fa-user"></i> <span>Senior CE</span></a></li>
          <li><a href=""><i class="fa fa-user"></i><span>Junior CE</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Payroll Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-building"></i>Department</a></li>
            <li><a href=""><i class="fa fa-star"></i>Division</a></li>
            <li><a href=""><i class="fa fa-bank"></i>Banks</a></li> <!--country-->
            <li><a href=""><i class="fa fa-minus"></i>Debits</a></li> <!--state-->
            <li><a href=""><i class="fa fa-plus"></i>Credit</a></li><!--city-->
            <li><a href=""><i class="fa fa-gavel"></i>Penalties</a></li><!--pelnaties-->
            <li><a href=""><i class="fa fa-file-pdf-o"></i>Report</a></li>
          </ul>
        </li>
        <li><a href=""><i class="fa fa-cogs"></i> <span>User management</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>