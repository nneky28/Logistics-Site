
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LuXury | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <style>
    /* Style The Dropdown Button */
    .dropbtn {
      font-size: 1em;
      border: none;
      cursor: pointer;
      background: transparent;
      color:#eee;
    }
    
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      min-width: 10%;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      text-decoration: none;
      display: block;
      text-align: center
    }
    
    /* Change color of dropdown links on hover */
    
    
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
      background-color:;
    }
 

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }


 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: gray;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 p {
     font-size: 0.875rem;
     margin-bottom: .5rem;
     line-height: 1.5rem
 }

 .table-responsive {
     display: block;
     width: 100%;
     overflow-x: auto;
     -webkit-overflow-scrolling: touch;
     -ms-overflow-style: -ms-autohiding-scrollbar
 }
 
</style>  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>

      
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
           
        <!-- Notifications Dropdown Menu -->
      
        <li class="nav-item">
          <a class="nav-link" href="/logout" role="button">
            <i class="fas fa-th-large"></i>
            <button type="submit" class="btn btn-primary">Log Out</button>
          </a>
        </li>
      </ul>
    </nav>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class=" ms-5">
     
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/nekky.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">techsis</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/contactdetails" class="nav-link active">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/calculator" class="nav-link">
                  <i class="nav-icon fas fa-calculator"></i>
                  <p>Calculator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/adminorder" class="nav-link">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/adminblog" class="nav-link">
                  <i class="nav-icon fas fa-blog"></i>
                  <p>BLOGS</p>
                </a>
              </li>
              <li class="nav-item"style=" margin-top:-12%;">
                <a href="" class="nav-link">
                  <div class="dropdown">
                    <i class="nav-icon fas fa-cog"> <button class="dropbtn">Settings</button></i>
                  <div class="dropdown-content">
                     <a href="#">Privary policy</a>
                      <a href="#">Faq</a>
                        <a href="/adminabout">About us</a>
                        <a href="">Terms $ Condition</a>
                        </div>
                      </div>
                </a>
              </li>
            </ul>
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                ORDERS
                </h3>
                <div class="card-tools">
                  
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped table-hover"style="width: 100%">
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Track Number</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date of Order</th>
                      <th scope="col">Update Status</th>
                    </th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($order_all as $item) 
                    <form action="/orders" method="post" style="width: 30%">
                      @csrf
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <th><input type="text" name="id" value="{{$item['id']}}" readonly> </th>
                      <td> <input type="text" name="coupon" value="{{$item['coupon']}}" readonly></td>
                      <td> <input type="text" name="status" value="{{$item['status']}}" readonly></td>
                      <td> <input type="text" name="updated_at" value="{{$item['updated_at']}}" readonly></td>
                      
                          <td>
                          <button type="submit" name="details" class="badge badge-success"
                           style="border: none; padding:0.6rem 1em; background-color:navy;"
                          value="{{$item['id']}}">Update</button>
                        </td>
                    </tr>
                    </form>
                    @endforeach
                  </tbody>
                </table>
                {{$order_all->links('vendor.pagination.bootstrap-4')}} 
                
              </div>
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">ABOUT US</h3>
              </div>
                <div class="card-tools">
                  
                </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                @foreach ($datas as $item)
                <tr>
                  <h2 style="text-align: center;font-family:cursive">About Us</h2>
                  
                  <h4 style="text-align: center; padding:20px">{{$item['content']}}</h4>
                  <p style="text-align: center"> <img src="images/signature-2.png" alt=""></p>
                  <a href="/adminchange?id={{$item['id']}}&action=edit"><button  class="btn btn-primary px-5"  type="submit">
                   Edit
                  </button></a>
                </tr>
              @endforeach 
              </div> 
                <div class="direct-chat-messages">
                </div>
                  <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                   
                    <!-- End Contact Item -->
                  
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <div class="contacts-list-info">
                          
                          
                        </div>
                        <!-- /.contacts-list-info -->
                      
                </div>
                <!-- /.direct-chat-pane -->
              </div>
            
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header"></div>
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                 BLOG LIST
                </h3>
                <table class="table table-inverse" style="width: 100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Content</th>
                      <th>Categories</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($output as $item1)
                    <tr>
                      <th>{{$item1['id']}}</th>
                      <td>{{$item1['title']}}</td>
                      <td>{{$item1['desc']}}</td>
                      <td><img width="100%" src="images/{{$item1['image']}}" alt=""></td>
                      <td style=""> {{Str::limit($item1['content'],50)}}</td>
                      <td> {{$item1['categories']}}</td>
                      <td> {{$item1['updated_at']}}</td>
                      <td>
                      
                         <button class=" btn btn-success"  style="background:green; color:#fff; margin-left:8%"  
                         type="submit"> <a href="/adminEdit?id={{$item1['id']}}&action=edit">Edit</a></button>
                         <button class="btn btn-danger" style="background:red; color:#fff; margin-left:8%" type="submit">
                           <a href="/adminEdit?id={{$item1['id']}}&action=delete">Delete</a></button>
                         </td>
                    </tr> 
                  
                    
                @endforeach
                  </tbody>
                </table>
           
              <!-- /.card-header -->
              <div class="card-body">
              
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
               <a href="/adminblog"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> </button></a> 
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0 mt-5 p-5 mb-0 text-center ">USERS CONTACTS </div>
              <div class="card-body">
                <div class="page-content page-container" id="page-content">
                  <div class="padding">
                      <div class="row container d-flex justify-content-center">
                          <div class="col-lg-8 grid-margin stretch-card">
                              <div class="card">
                                  <div class="card-body">
                                      <h1 class="card-title">Contact Table</h1>
                                      <p class="card-description">  </p>
                                      <div class="table-responsive">
                                          <table class="table table-striped table-hover ">
                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>NAMES</th>
                                                      <th>Created_at</th>
                                                      <th>More</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <form action="/userD" method="POST">
                                                  @csrf
                                                  @foreach ($contact as $item)    
                                                  <tr data-widget="expandable-table" aria-expanded="false">
                                                    
                                                    <th>{{$item['id']}}</th>
                                                    <td>{{$item['name']}}</td>
                                                    <td>{{$item['created_at']}}</td>
                                                    <td>{{$item['status']}}</td>
                                                    
                                                    <td>
                                                      <a href="/userD">
                                                        <button type="submit" name="details" class="btn btn-primary px-4"value="{{$item['id']}}">More</button>
                                                      </a>
                                                    </td>
                                                  </tr>
                                                  @endforeach
                                                </form>
                                              </tbody>
                                        </table>
                                            <div class="footer">
                                            {{$contact->links('vendor.pagination.bootstrap-4')}}
                                                
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
               
                
                
                
                
               </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                   </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0"></div>
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                Quote Calculator
                </h3>

                <div class="card-tools">
                  
                </div>
              
              <div class="card-body">
                <form action="/calculator" method="post" style="margin-top: 5%; margin-left:30%">
                  @csrf
                 
                @foreach ($data as $item)
                <p><input type="number" placeholder="bike" name="bike" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="bike" value="{{$item->bike}}"> 
                </p>
                <p><input type="number" placeholder="tricycle" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="tricycle" value="{{$item->tricycle}}"> 
                </p>
                <p><input type="number" placeholder="mini_van" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="mini_van" value="{{$item->mini_van}}"> 
                </p>
                <p><input type="number" placeholder="buses" name="buses" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="buses" value="{{$item->buses}}"> 
                </p>
                <p><input type="number" placeholder="cars" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="cars" value="{{$item->cars}}"> 
                </p>
            
                 <p><input type="number" placeholder="Distance" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="distance" value="{{$item->distance}}"> 
                </p>
                <p><input type="number" placeholder="weight" name="weight" disabled><i class="fas fa-arrows-alt-h"></i>
                  <input type="text" placeholder="Price" name="weight"  value="{{$item->weight}}"> 
                </p>
               
          <a href="/dashboard">
            <button type="submit"
             class="btn btn-primary mt-4 px-5 p-1">Update</button></a>
          </form>
          @endforeach
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;2021 <a href="https://adminlte.io">techsis.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
