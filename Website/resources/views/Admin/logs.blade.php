<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auto Livestock Feeder</title>
  <link rel="shortcut icon" type="image/png" href="templateForAdmin/src/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="templateForAdmin/src/assets/css/styles.min.css" />
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
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
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
        <div class="card">
          <div class="card-body">
             <!-- Breadcrumb -->
             <nav aria-label="breadcrumb" class="main-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin Logs</li>
              </ol>
            </nav>
            <!-- /Breadcrumb -->
            <div class="row">
              <?php
              use App\Models\Log; // Import the Log model
              
              $logs = Log::orderBy('created_at', 'desc')->get(); // Fetch logs from latest to oldest
              ?>
          
              <div class="row">
                  <div class="col-lg-12 d-flex align-items-stretch">
                      <div class="card w-100">
                          <div class="card-body p-4">
                              <div class="mb-4">
                                  <h5 class="card-title fw-semibold">Feeder Logs</h5>
                              </div>
                              <ul class="timeline-widget mb-0 position-relative mb-n5">
                                  @foreach($logs as $log)
                                  <li class="timeline-item d-flex position-relative overflow-hidden">
                                      <div class="timeline-time text-dark flex-shrink-0 text-end">
                                          {{ \Carbon\Carbon::parse($log->created_at)->format('h:i A, M d Y') }}
                                      </div>
                                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                          <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8">
                                          </span>
                                          <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                      </div>
                                      <div class="timeline-desc fs-3 text-dark mt-n1 ">
                                          <strong>{{ $log->machine_name }}</strong>  
                                          <br>
                                          {{ $log->message }}
                                      </div>
                                  </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
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
  <script src="templateForAdmin/src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>