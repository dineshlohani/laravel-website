<!-- Sidebar -->
<nav id="sidebar">
   <div class="sidebar_blog_1">
      <div class="sidebar-header">
         <div class="logo_section">
            <a href="#"><img class="logo_icon img-responsive" src="assets/imagess/logo/logo.png"  alt="" /></a>
         </div>
      </div>
      <div class="sidebar_user_info">
      <div class="user_profle_side">
                     @php
                        $username = Auth::guard('admin')->user()->username;
                        $imagePath = $username === 'Bishal' ? 'assets/imagess/logo/Bishal.png' : 'assets/imagess/logo/dinesh.png';
                     @endphp
                     <div class="user_img"><img class="img-responsive" src="{{ asset($imagePath) }}" alt="#" /></div>
                    
            <div class="user_info">
               {{ Auth::guard('admin')->user()->name }}
               <p><span class="online_animation"></span> Online</p>
            </div>
         </div>
      </div>
   </div>
   <div class="sidebar_blog_2">
      <h4>General</h4>
      <ul class="list-unstyled components">
         <li class="active">
            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" ><i class="fas fa-home yellow_color"></i> <span>Dashboard</span></a>
           
         </li>
         
         <li><a href="#"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
         <li>
            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
            <ul class="collapse list-unstyled" id="apps">
               <li><a href="#">> <span>Email</span></a></li>
               <li><a href="#">> <span>Calendar</span></a></li>
               <li><a href="#">> <span>Media Gallery</span></a></li>
            </ul>
         </li>
         <li><a href="#"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
         <li>
            <a href="#">
            <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
         </li>
         <li class="active">
            <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
            <ul class="collapse list-unstyled" id="additional_page">
               
               
               <li>
                  <a href="{{ route('signup') }}"> <span>Create  New Admin</span></a>
               </li>
              
            </ul>
         </li>
         
         <li><a href="#"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
      </ul>
   </div>
</nav>
<!-- End Sidebar -->
