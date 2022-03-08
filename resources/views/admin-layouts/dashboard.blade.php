<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

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
  </style>
  
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">PayRoll</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
           
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" href="/logout" role="button">
          <i class="fas fa-th-large"></i>
          <button type="submit" class="btn btn-primary">Log Out</button>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" alt="" class="brand-image img-circle" style="">
      <span class="brand-text font-weight-light">Luxury Logistics </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/images/nekky.png" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
              <li class="nav-item">
                <a href="/contactdetails" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>CONTACTS</p>
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
                  <p>ORDERS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/adminblog" class="nav-link">
                  <i class="nav-icon fas fa-blog"></i>
                  <p>BLOGS</p>
                </a>
              </li> 

              <li class="nav-item" style=" margin-top:-12%;">
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
                
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: lightblue">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #eee">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
 <div class="container">
      @foreach ($data as $item)
                  <tr>
                    <h2 style="text-align: center;font-family:cursive">About Us</h2>
                    
                    <h4 style="text-align: center; padding:20px">{{$item['content']}}</h4>
                    <h5 class="date mt-5" style="float: right;"> Updated at:{{$item['updated_at']}}</h5>
                    <p style="text-align: center"> <img src="images/signature-2.png" alt=""></p>
                    <a href="/adminchange?id={{$item['id']}}&action=edit"><button  class="btn btn-primary px-5"  type="submit">
                     Edit
                    </button></a>
                  </tr>
                @endforeach 
              </div>

              
  <table class="table table-striped table-hover">
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
      <form action="/orders" method="post">
        @csrf
      <tr data-widget="expandable-table" aria-expanded="false">
        
       
       
   
        <th><input type="text" name="id" value="{{$item['id']}}" readonly> </th>
        <td> <input type="text" name="coupon" value="{{$item['coupon']}}" readonly></td>
        <td> <input type="text" name="status" value="{{$item['status']}}" readonly></td>
        <td> <input type="text" name="updated_at" value="{{$item['updated_at']}}" readonly></td>
        
            <td>
                <button type="submit" name="details" class="badge badge-success"
                 style="border: none; padding:0.6rem 1em; background-color:navy;" value="{{$item['id']}}">Update</button>
            </td>
      </tr>
      </form>
      @endforeach
    </tbody>
  </table>
  {{$order_all->links('vendor.pagination.bootstrap-4')}} 

                <table class="table table-inverse" style="width:103%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Author</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Content</th>
                      <th>Categories</th>
                      <th>updated_at</th>
                      <th>Action(Edit or Delete)</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                @foreach ($output as $item1)
                    <tr>
                      <th>{{$item1['id']}}</th>
                      <td>{{$item1['author']}}</td>
                      <td>{{$item1['title']}}</td>
                      <td>{{$item1['desc']}}</td>
                      <td><img width="100%" src="images/{{$item1['image']}}" alt=""></td>
                      <td style=""> {{$item1['content']}}</td>
                      <td> {{$item1['categories']}}</td>
                      <td> {{$item1['updated_at']}}</td>
                      <td>
                      
                         <button class=""  style="background:green; color:#fff; width:33px;margin-left:-5%"  type="submit"> <a href="/adminEdit?id={{$item1['id']}}&action=edit">Edit</a></button>
                         <button style="background:red; color:#fff; width:50px" type="submit">
                           <a href="/adminEdit?id={{$item1['id']}}&action=delete">Delete</a></button>
                         </td>
                    </tr> 
                  
                    
                @endforeach
          
          
          
          
          
          <h3 style="text-align:center; margin-top:4%; text-transform:uppercase"> statistics</h3>
      <img style="margin-bottom: 10%"
      width="100%" src="assets/images/dash.png" alt="">
  </div>

                 
      


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
<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
