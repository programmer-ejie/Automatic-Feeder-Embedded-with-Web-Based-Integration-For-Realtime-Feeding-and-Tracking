<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auto Livestock Feeder</title>
  <link rel="shortcut icon" type="image/png" href="templateForAdmin/src/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="templateForAdmin/src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


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
                    <a href="{{ route('toManage')}}" class="d-flex align-items-center gap-2 dropdown-item">
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
                <li class="breadcrumb-item active" aria-current="page">Admin Manage</li>
              </ol>
            </nav>
            <!-- /Breadcrumb -->
            <!-- Add Machine Button -->
            <button class="btn btn-primary" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); margin-bottom: 20px;" data-bs-toggle="modal" data-bs-target="#addMachineModal">
              Add Machine
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addMachineModal" tabindex="-1" aria-labelledby="addMachineModalLabel" aria-hidden="true" style = "margin-top: 40px;">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addMachineModalLabel">Add New Machine</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!-- Form to add a new machine -->
                          <form action="{{ route('machines.store') }}" method="POST">
                              @csrf
                              <div class="mb-3">
                                  <label for="machine_name" class="form-label">Machine Name</label>
                                  <input type="text" class="form-control" id="machine_name" name="machine_name" required>
                              </div>
                              <div class="mb-3">
                                <label for="ip_address" class="form-label">IP Address</label>
                                <input type="text" class="form-control" id="ip_address" name="ip_address" required>
                            </div>
                              <div class="mb-3">
                                  <label for="development_board" class="form-label">Development Board</label>
                                  <input type="text" class="form-control" id="development_board" name="development_board" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Add Machine</button>
                          </form>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row">
            
                <div class="col-lg-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body p-4">
                      <h5 class="card-title fw-semibold mb-4">Feeder Machine Management</h5>
                      <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                          <thead class="text-dark fs-4">
                            <tr>
                          
                              <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Machine Name</h6>
                              </th>
                              <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">IP Information</h6>
                              </th>
                              <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">Feed Schedule</h6>
                              </th>
                              <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">Status</h6>
                              </th>
                              <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                            use Carbon\Carbon;
                            $scheduledFeedings = [];
                        
                            foreach ($machineLists as $index => $mac)
 {
                                if (!empty($mac->scheduled_time)) {
                                    $scheduledFeedings[] = [
                                        'id' => $mac->id,
                                        'time' => Carbon::parse($mac->scheduled_time)->format('H:i'),
                                    ];
                                }
                            }
                           @endphp
                        
                
                            @foreach ($machineLists as $index => $machine)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $machine->machine_name }}</h6>
                                    <span class="fw-normal">Servo {{ $index + 1 }}</span>
                                </td>
                                <td class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">{{ $machine->ip_address }}</h6>
                                </td>
                                @php
                                $timeOnly = $machine->scheduled_time 
                                    ? \Carbon\Carbon::parse($machine->scheduled_time)->format('H:i:s') 
                                    : null;
                            @endphp
                            
                            <td class="border-bottom-0 text-center">
                                <p class="mb-0 fw-normal">
                                    @if ($timeOnly)
                                        {{ \Carbon\Carbon::parse($timeOnly)->format('h:i A') }}<br>
                                        <span class="countdown-timer text-muted"
                                              data-daily-time="{{ $timeOnly }}"
                                              data-machine-id="{{ $machine->id }}">
                                            Loading...
                                        </span>
                                    @else
                                        0h0m0s
                                    @endif
                                </p>
                            </td>
                                             
                                
                                <td class="border-bottom-0 text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        @if ($index >= 2)
                                            <span class="badge bg-danger rounded-3 fw-semibold">Offline</span>
                                        @else
                                            <span class="badge bg-success rounded-3 fw-semibold">Online</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="border-bottom-0 text-center">
                                  <form id="feeding-form-{{ $machine->id }}"
                                    action="{{ route('feednow') }}"
                                    method="get"
                                    style="display: inline;">
                                <input type="hidden" name="servoNumber" value="{{ $index + 1 }}">
                                <input type="hidden" name="id" value="{{ $machine->id }}">
                                <input type="hidden" name="ip_address" value="{{ $machine->ip_address }}">
                          
                                @if ($index >= 2)
                                  <button type="submit" class="btn btn-primary" disabled>
                                    <i class="bi bi-play-circle-fill"></i>
                                  </button>
                                @else
                                  <button type="submit" class="btn btn-primary" onclick="initiateFeeding(this)">
                                    <i class="bi bi-play-circle-fill"></i>
                                  </button>
                                @endif
                              </form>
                              
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#scheduleModal_{{ $index }}">
                                  <i class="bi bi-clock"></i>
                                </button>
                                    
                                    
                                    
                                    <!-- Edit Button to Trigger Modal -->
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal_{{ $index }}" >
                                        <i class="bi bi-pencil"></i>
                                    </button>
                        
                                    <!-- Delete Button to Trigger Confirmation Modal -->
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $index }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                          <!-- Schedule Modal -->
                              <div class="modal fade" id="scheduleModal_{{ $index }}" tabindex="-1" aria-labelledby="scheduleModalLabel_{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="scheduleModalLabel_{{ $index }}">Set Feeding Schedule</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{ route('machines.schedule') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="machine_id" value="{{ $machine->id }}">
                                        <p><strong>Machine:</strong> {{ $machine->machine_name }}</p>
                                        <div class="mb-3">
                                          <label for="scheduleTime_{{ $index }}" class="form-label">Choose Time</label>
                                          <input type="time" class="form-control" name="scheduled_time" 
                                              value="{{ $machine->scheduled_time ? \Carbon\Carbon::parse($machine->scheduled_time)->format('H:i') : '' }}" 
                                              required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Schedule</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                       
                            
                            <!-- Add any additional machines here --> 
                          

                          <!-- Countdown Modal -->
                          <div class="modal fade" id="countdownModal" tabindex="-1" aria-labelledby="countdownModalLabel" aria-hidden="true"
                          data-bs-backdrop="static" data-bs-keyboard="false">
                       <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="countdownModalLabel">Feeding in Progress</h5>
                           </div>
                           <div class="modal-body text-center">
                             <p>Estimated Time: <span id="countdownTimer">15</span> seconds...</p>
                             <p id="countdownMssage">Please wait while the feeder operates...</p>
                           </div>
                         </div>
                       </div>
                     </div>
                     
                        
                            <!-- Edit Modal for each machine -->
                            <div class="modal fade" id="editModal_{{ $index }}" tabindex="-1" aria-labelledby="editModalLabel_{{ $index }}" aria-hidden="true" style = "margin-top: 9vh;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel_{{ $index }}">Edit Machine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editMachineForm_{{ $index }}" method="POST" action="{{ route('machines.edit') }}">
                                                @csrf
                                                <input type="hidden" name="machineId" value="{{ $machine->id }}">
                        
                                                <!-- Machine Name -->
                                                <div class="mb-3">
                                                    <label for="machineName_{{ $index }}" class="form-label">Machine Name</label>
                                                    <input type="text" class="form-control" id="machineName_{{ $index }}" name="machine_name" value="{{ $machine->machine_name }}" required>
                                                </div>
                        
                                                <!-- IP Address -->
                                                <div class="mb-3">
                                                    <label for="ip_address_{{ $index }}" class="form-label">IP Address</label>
                                                    <input type="text" class="form-control" id="ip_address_{{ $index }}" name="ip_address" value="{{ $machine->ip_address }}" required>
                                                </div>
                        
                                                <!-- Development Board -->
                                                <div class="mb-3">
                                                    <label for="developmentBoard_{{ $index }}" class="form-label">Development Board</label>
                                                    <input type="text" class="form-control" id="developmentBoard_{{ $index }}" name="development_board" value="{{ $machine->development_board }}" required>
                                                </div>
                        
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Delete Confirmation Modal for each machine -->
                            <div class="modal fade" id="deleteModal_{{ $index }}" tabindex="-1" aria-labelledby="deleteModalLabel_{{ $index }}" aria-hidden="true" style = "margin-top: 20vh;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel_{{ $index }}">Confirm Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the machine <strong>{{ $machine->machine_name }}</strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('machines.delete') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="machineId" value="{{ $machine->id }}">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
                        

                        
             
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function startCountdown() {
      const timers = document.querySelectorAll('.countdown-timer');
    
      timers.forEach(timer => {
        const dailyTime = timer.dataset.dailyTime;
        const machineId = timer.dataset.machineId;
    
        let executed = false; // Per timer instance
    
        function getNextScheduledTime(timeStr) {
          const [hours, minutes, seconds] = timeStr.split(':').map(Number);
          const now = new Date();
    
          let scheduled = new Date(
            now.getFullYear(),
            now.getMonth(),
            now.getDate(),
            hours,
            minutes,
            seconds
          );
    
          // If scheduled time already passed today, use tomorrow
          if (scheduled.getTime() <= now.getTime()) {
            scheduled.setDate(scheduled.getDate() + 1);
          }
    
          return scheduled;
        }
    
        function updateTimer() {
          const now = new Date();
          const scheduled = getNextScheduledTime(dailyTime);
          const distance = scheduled.getTime() - now.getTime();
    
          const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
          const minutes = Math.floor((distance / (1000 * 60)) % 60);
          const seconds = Math.floor((distance / 1000) % 60);
    
          timer.textContent = `${hours}h${minutes}m${seconds}s`;
    
          if (distance <= 1000 && !executed) {
            executed = true;
    
            // Submit the correct form for this machine
            const form = document.getElementById(`feeding-form-${machineId}`);
            if (form) {
              const button = form.querySelector('button[type="submit"]');
              if (button && !button.disabled) {
                button.click(); // Triggers any attached `onclick`
              } else {
                console.warn(`Form or button for machine ${machineId} not available or disabled.`);
              }
            }
          }
        }
    
        updateTimer();
        setInterval(updateTimer, 1000);
      });
    }
    
    document.addEventListener('DOMContentLoaded', startCountdown);
    </script>
    
    
  <script src="templateForAdmin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>    

  <script>
    function initiateFeeding(button) {
      // Prevent default form submission
      button.closest('form').submit();
      event.preventDefault();
  
      // Show the countdown modal
      const countdownModal = new bootstrap.Modal(document.getElementById('countdownModal'));
      countdownModal.show();
  
      // Start the countdown
      let countdown = 15;
      const countdownTimer = document.getElementById('countdownTimer');
      const countdownMessage = document.getElementById('countdownMessage'); // New element for dynamic messages
      countdownTimer.textContent = countdown;
  
      const interval = setInterval(() => {
        countdown--;
        countdownTimer.textContent = countdown;
  
        // Update the message based on the countdown value
        if (countdown >= 13) {
          countdownMessage.textContent = "Initializing...";
        }else if (countdown >= 10) {
          countdownMessage.textContent = "Connecting to the machine...";
        } else if (countdown >= 7) {
          countdownMessage.textContent = "Preparing to feed...";
        } else if (countdown > 2) {
          countdownMessage.textContent = "Feeding in progress...";
        } else {
          countdownMessage.textContent = "Feeding completed! ✅";
        }
  
        if (countdown <= 0) {
          clearInterval(interval);
          countdownModal.hide(); // Close the modal when countdown reaches 0
          
        }
      }, 1000);
    }
  </script>
  <script src="templateForAdmin/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="templateForAdmin/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="templateForAdmin/src/assets/js/sidebarmenu.js"></script>
  <script src="templateForAdmin/src/assets/js/app.min.js"></script>
  <script src="templateForAdmin/src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>