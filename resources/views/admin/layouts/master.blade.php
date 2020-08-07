<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel || Dhaka Fish Supply</title>
    <!-- plugins:css -->
    @include('admin.partials.styles')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     		@include('admin.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                @yield('content')
          </div>
     	 </div>
  		</div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.partials.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.partials.scripts')
  </body>
</html>