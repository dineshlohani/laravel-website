<!DOCTYPE html>
<html lang="en">
   
   @include('partials.head')
   @include('partials.header1')
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Include Sidebar -->
         @include('partials.sidebars')
         <!-- Start content -->
         <div id="content">
            <!-- Include the Topbar -->
            @yield('content')
            <!-- Include Footer -->
            @include('partials.footers')
         </div>
      </div>
   </div>
   <!-- Include JS Scripts -->
   @include('partials.scripts')
</body>
</html>
