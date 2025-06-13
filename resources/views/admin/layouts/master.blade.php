<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 00:51:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('admin.sections.styles')
@yield('custom_styles')
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
Nav header start
***********************************-->
      @include('admin.sections.nav-header')
    <!--**********************************
        Nav header end
    ***********************************-->		<!--**********************************
	Chat box start
***********************************-->
    @include('admin.sections.chatbox')
    <!--**********************************
        Chat box End
    ***********************************-->        <!--**********************************
	Header start
***********************************-->
    @include('admin.sections.header')
    <!--**********************************
        Header end
    ***********************************-->        <!--**********************************
    Sidebar start
***********************************-->
    @include('admin.sections.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->        <!--**********************************
	Content body start
***********************************-->
    <div class="content-body">
        <!-- row -->
          @yield('content-body')
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
    <!--**********************************
Footer start
***********************************-->
    @include('admin.sections.footer')
    <!--**********************************
        Footer end
    ***********************************-->

</div>

@include('admin.sections.scripts')
@yield('custom-scripts')


<!--**********************************
    Main wrapper end
***********************************-->
</body>

<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 00:52:13 GMT -->
</html>
