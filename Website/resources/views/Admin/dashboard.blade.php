<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auto Livestock Feeder</title>
  <link rel="shortcut icon" type="image/png" href="templateForAdmin/src/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="templateForAdmin/src/assets/css/styles.min.css" />
  <style>
    body{
      overflow: hidden;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
       <a href="./index.html" class="text-nowrap logo-img" style = "margin-top: 20px;">
            <img src="templateForAdmin/src/assets/images/logos/logo-alfms.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
       
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
                </li>
                
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{route('toDashboard')}}" aria-expanded="false">
                    <span>
                      <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{route('toProfile')}}" aria-expanded="false">
                      <span>
                          <i class="ti ti-user"></i>
                      </span>
                      <span class="hide-menu">Profile</span>
                  </a>
              </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('toManage')}}" aria-expanded="false">
                      <span>
                        <i class="ti ti-article"></i>
                      </span>
                      <span class="hide-menu">Manage</span>
                    </a>
                  </li>   
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('toLogs')}}" aria-expanded="false">
                      <span>
                        <i class="ti ti-files"></i>
                      </span>
                      <span class="hide-menu">Logs</span>
                    </a>
                  </li>
              
              </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="{{route('toLogs')}}">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
           
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="images/default.png" alt="" width="35" height="35" class="rounded-circle" style = "border:  2px solid black; border-radius: 50%;">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{route('toProfile')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                
                    <a href="{{route('toManage')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">Feeder Machines</p>
                    </a>
                    <a href="{{route('toLandingPage')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
           <!-- Breadcrumb -->
           <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
        <!-- Row 1: System Overview -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5 bg-light rounded shadow-sm text-center">
                    <h2 class="fw-bold text-primary">Welcome to Automatic Livestock Feeder Management System</h2>
                    <p class="text-muted mt-3">
                        Our system is designed to automate the feeding process for livestock, ensuring precise feeding schedules,
                        real-time monitoring, and efficient management. Improve livestock health and productivity with our innovative solution.
                    </p>
                </div>
            </div>
        </div>
    
        <!-- Row 2: Features -->
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="p-4 border rounded text-center bg-black shadow-sm" style = "font-color: white; height: 200px;">
                    <i class="fas fa-clock fa-3x text-primary"></i>
                    <h4 class="mt-3 fw-bold" style = "color: white;">Automated Feeding</h4>
                    <p style = "color: rgb(124, 118, 118);">Schedules feeding times automatically to ensure livestock get the right amount of food at the right time.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 border rounded text-center bg-black shadow-sm" style = "font-color: white; height: 200px;">
                    <i class="fas fa-chart-line fa-3x text-success"></i>
                    <h4 class="mt-3 fw-bold" style = "color: white;">Real-time Monitoring</h4>
                    <p style = "color: rgb(124, 118, 118);">Monitor feeding data and livestock activity with real-time analytics and reports.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 border rounded text-center bg-black shadow-sm" style = "font-color: white; height: 200px;">
                    <i class="fas fa-cogs fa-3x text-danger"></i>
                    <h4 class="mt-3 fw-bold" style = "color: white;">Easy Management</h4>
                    <p style = "color: rgb(124, 118, 118);">Control and adjust feeding schedules and quantities easily through an intuitive dashboard.</p>
                </div>
            </div>
        </div>
    
      
    </div>
    
    </div>
  </div>
  <script src="templateForAdmin/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="templateForAdmin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="templateForAdmin/src/assets/js/sidebarmenu.js"></script>
  <script src="templateForAdmin/src/assets/js/app.min.js"></script>
  <script src="templateForAdmin/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="templateForAdmin/src/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="templateForAdmin/src/assets/js/dashboard.js"></script>
</body>

</html>