

    @include('admin.header')

    @yield('content')

    @include('admin.footer')
    @yield('slidebar')



<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>

<!-- Mirrored from p.w3layouts.com/demos/28-03-2016/shoppy/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 05:39:10 GMT -->
</html>                     