<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Login Page</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="templateForAuth/dist/assets/images/logos/alfms.png" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="templateForAuth/dist/assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="templateForAuth/dist/assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="templateForAuth/dist/assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="templateForAuth/dist/assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="templateForAuth/dist/assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="templateForAuth/dist/assets/css/style-preset.css" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <img src="templateForAuth/dist/assets/images/logos/alfms.png" alt="img" style = "width: 130px; border-radius: 10px;  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        </div>
        <div class="card my-3">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Login</b></h3>
              <a href="{{route('toRegister')}}" class="link-primary">Don't have an account?</a>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                  <label class="form-label">Email Address</label>
                  <input type="email" name="gmail" class="form-control" placeholder="Gmail Address" required>
                  @error('gmail')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              
                <div class="form-group mb-3 position-relative">
                  <label class="form-label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                      <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                  </div>
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              
                <div class="d-grid mt-4">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              
                @if(session('error'))
                  <p class="text-danger mt-3">{{ session('error') }}</p>
                @endif
              </form>
              
         
              
              <!-- FontAwesome for icons -->
              <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
              
              <script>
                document.getElementById('togglePassword').addEventListener('click', function () {
                  const passwordInput = document.getElementById('passwordInput');
                  const eyeIcon = document.getElementById('eyeIcon');
                  if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                  } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                  }
                });
              </script>
       
         
       
          </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
              <p class="m-0">Copyright © <a href="{{route('toLandingPage')}}">Automatic Livestock Feeder MS</a></p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="templateForAuth/dist/assets/js/plugins/popper.min.js"></script>
  <script src="templateForAuth/dist/assets/js/plugins/simplebar.min.js"></script>
  <script src="templateForAuth/dist/assets/js/plugins/bootstrap.min.js"></script>
  <script src="templateForAuth/dist/assets/js/fonts/custom-font.js"></script>
  <script src="templateForAuth/dist/assets/js/pcoded.js"></script>
  <script src="templateForAuth/dist/assets/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    
 
</body>
<!-- [Body] end -->

</html>