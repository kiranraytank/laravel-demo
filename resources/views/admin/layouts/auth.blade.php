<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('admin/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
