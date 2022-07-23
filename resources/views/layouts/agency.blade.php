<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Mazeoptions Agent</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/logo-hover.png')}}">
        <!-- jvectormap -->
        <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- App css -->
        <link href="{{asset('/agency/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/agency/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/agency/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/agency/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/agency/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
   
        @include('partials.agency')
            @yield('content')

<footer class="footer text-center text-sm-start">
  All Rights Reserved.  &copy; <script>
       document.write(new Date().getFullYear())
   </script>  
</footer>
<!--end footer-->
</div>
<!-- end page content -->



<!-- jQuery  -->
<script src="{{asset('/agency/js/jquery.min.js')}}"></script>
<script src="{{asset('/agency/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/agency/js/metismenu.min.js')}}"></script>
<script src="{{asset('/agency/js/waves.js')}}"></script>
<script src="{{asset('/agency/js/feather.min.js')}}"></script>
<script src="{{asset('/agency/js/simplebar.min.js')}}"></script>
<script src="{{asset('/agency/js/moment.js')}}"></script>
<script src="{{asset('/agency/plugins/apex-charts/apexcharts.min.js')}}"></script>
<script src="{{asset('/agency/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/agency/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('/agency/pages/jquery.analytics_dashboard.init.js')}}"></script>
<script src="{{asset('/agency/js/app.js')}}"></script>


<script src="{{asset('/assets/pages/jquery.animate.init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>     


    let message = {!! json_encode(Session::get('msg')) !!};
    let msg = {!! json_encode(Session::get('alert')) !!};
    let name =  {!! json_encode(agent_user()->name) !!};
    //let logUlr = $('#frm-logout').submit();
    //alert(message);
    toastr.options = {
            timeOut: 6000,
            progressBar: true,
            showMethod: "slideDown",
            hideMethod: "slideUp",
            showDuration: 500,
            hideDuration: 500
        };
    if(message != null && msg == 'success'){
    toastr.success(message);
    }else if(message != null && msg == 'error'){
        toastr.error(message);
    }
    $.sessionTimeout({
    message: "Hi " + name + " Your session will expire soon.",
    keepAliveUrl:"{{route('index')}}",
    logoutButton:"Logout Now",
    logoutUrl:"{{route('logout')}}",
    redirUrl:"{{route('logout')}}",
    warnAfter:80e3,
    redirAfter:60e4,
    countdownBar:!0
    });
    
    
       </script>
            @yield('script')
</body>
</html>
