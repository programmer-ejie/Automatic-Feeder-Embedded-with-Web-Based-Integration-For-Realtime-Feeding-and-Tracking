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
        overflow:hidden;
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
        <div class="card">
          <div class="card-body">

            <style>
               
                .card {
                        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
                    }

                    .card {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        min-width: 0;
                        word-wrap: break-word;
                        background-color: #fff;
                        background-clip: border-box;
                        border: 0 solid rgba(0,0,0,.125);
                        border-radius: .25rem;
                    }

                    .card-body {
                        flex: 1 1 auto;
                        min-height: 1px;
                        padding: 1rem;
                    }

                    .gutters-sm {
                        margin-right: -8px;
                        margin-left: -8px;
                    }

                    .gutters-sm>.col, .gutters-sm>[class*=col-] {
                        padding-right: 8px;
                        padding-left: 8px;
                    }
                    .mb-3, .my-3 {
                        margin-bottom: 1rem!important;
                    }

                    .bg-gray-300 {
                        background-color: #e2e8f0;
                    }
                    .h-100 {
                        height: 100%!important;
                    }
                    .shadow-none {
                        box-shadow: none!important;
                    }
            </style>

            <div class="container">
              <form action="">
                <div class="main-body">
                
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                    </ol>
                  </nav>
                  <!-- /Breadcrumb -->
            
                  <?php
                  use App\Models\User;
                  
                  // Fetch user data based on the session ID
                  $user = User::find(session('user_id')); 
                  ?>
                  
                  <form action="upload_profile.php" method="POST" enctype="multipart/form-data">
                      <div class="row gutters-sm">
                          <div class="col-md-4 mb-3">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                          <label for="profileUpload" style="cursor: pointer;">
                                              <img id="profileImage" 
                                                   src="images/default.png" 
                                                   alt="User Profile" class="rounded-circle" width="170">
                                          </label>
                                         
                  
                                          <div class="mt-3">
                                              <h4>{{ $user->first_name ?? 'No info yet!' }} {{ $user->last_name ?? '' }}</h4>
                                              <p class="text-secondary mb-1">Registered User</p>
                                              <p class="text-muted font-size-sm">
                                                  Member since: {{ $user->created_at ? $user->created_at->format('F d, Y') : 'No info yet!' }}
                                              </p>
                                              
                                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                                  Edit
                                              </button>
                                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                                Delete
                                            </button>
                                            
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  
                          <div class="col-md-8">
                              <div class="card mb-3">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-sm-3"><h6 class="mb-0">Full Name</h6></div>
                                          <div class="col-sm-9 text-secondary">
                                              {{ ($user->first_name && $user->last_name) ? $user->first_name . ' ' . $user->last_name : 'No info yet!' }}
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-sm-3"><h6 class="mb-0">Email</h6></div>
                                          <div class="col-sm-9 text-secondary">{{ $user->gmail ?? 'No info yet!' }}</div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-sm-3"><h6 class="mb-0">Phone Number</h6></div>
                                          <div class="col-sm-9 text-secondary">{{ $user->phone_number ?? 'No info yet!' }}</div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-sm-3"><h6 class="mb-0">Password</h6></div>
                                          <div class="col-sm-9 text-secondary">********</div> <!-- Hide password for security -->
                                      </div>
                                      <hr>
                                      <div class="row">
                                          <div class="col-sm-3"><h6 class="mb-0">Address</h6></div>
                                          <div class="col-sm-9 text-secondary">{{ $user->address ?? 'No info yet!' }}</div>
                                      </div>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                  
                  <!-- Edit Profile Modal -->
                  <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true" style = "font-size: 10px;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                  <div class="modal-body">
                                      <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                                      
                                      <div class="mb-3">
                                          <label class="form-label">First Name</label>
                                          <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" style = "font-size: 10px;">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label">Last Name</label>
                                          <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" style = "font-size: 10px;">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label">Email</label>
                                          <input type="email" name="gmail" class="form-control" value="{{ $user->gmail }}" style = "font-size: 10px;">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label">Phone Number</label>
                                          <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}" style = "font-size: 10px;">
                                      </div>
                                      <div class="mb-3">
                                          <label class="form-label">Address</label>
                                          <input type="text" name="address" class="form-control" value="{{ $user->address }}" style = "font-size: 10px;">
                                      </div>
                                  
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success">Save Changes</button>
                                  </div>
                                
                              </form>
                          </div>
                      </div>
                  </div>

                  <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true" style = "margin-top: 20vh;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  Are you sure you want to delete your account? This action cannot be undone.
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <form action="{{ route('user.delete') }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                                      <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                    </div>

             
                  
        
                </div>
            </div>
      
              </form>
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