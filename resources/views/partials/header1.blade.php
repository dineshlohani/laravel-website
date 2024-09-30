<!-- Header -->
<div class="topbar">
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="full">
         <!-- Sidebar Toggle Button -->
         <button type="button" id="sidebarCollapse" class="sidebar_toggle">
            <i class="fa fa-bars"></i>
         </button>

         <!-- Logo Section -->
         <div class="logo_section">
            <a href="#">
               <img src="{{ asset('assets/images/logo/logo.png') }}" alt="shinjiru-logo">
            </a>
         </div>

         <!-- Right Topbar Section -->
         <div class="right_topbar">
            <div class="icon_info">
               <!-- Notification Icons -->
               <ul>
                  <li>
                     <a href="#">
                        <i class="fas fa-comment-alt"></i>
                        <span class="badge">2</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-question"></i>
                        <span class="badge">12</span>
                     </a>
                  </li>
                  <li>
                  <a href="#">
                     <i class="fa fa-bell"></i>
                     <span class="badge" id="total_notifications">22</span> 
                  </a>
               </li>
               </ul>

               <!-- User Profile Dropdown -->
               <ul class="user_profile_dd">
                  <li>
                  <a class="dropdown-toggle" data-toggle="dropdown">
                     @php
                        $username = Auth::guard('admin')->user()->username;
                        $imagePath = $username === 'Bishal' ? 'assets/imagess/logo/Bishal.png' : 'assets/imagess/logo/dinesh.png';
                     @endphp
                     <img class="img-responsive rounded-circle" src="{{ asset($imagePath) }}" />
                     <span class="name_user"> {{ $username }}</span>
                  </a>
                     
                     <!-- Dropdown Menu -->
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Help</a>
                        
                        <!-- Logout Button -->
                        <form action="{{ route('admin.logout') }}" method="POST">
                           @csrf
                           <button type="submit" class="dropdown-item">Log Out</button>
                        </form>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
</div>

