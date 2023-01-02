@php

use App\Models\Web;

$web = Web::first();

@endphp

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Website cek kelulusan {{$web->web_name }}">
    <meta name="keywords" content="Website cek kelulusan {{$web->web_name }}">
    <meta name="author" content="ZIFAU CODE">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/files/logo/{{ $web->logo }}">
    <link rel="shortcut icon" type="image/x-icon" href="/files/logo/{{ $web->logo }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->

    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END Page Level CSS-->



    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-callout.css') }}">

    <!-- ======================================  DATA TABLE =======================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <!-- ======================================  DATA TABLE =======================================-->

    <!-- ======================================  SELECT 2 =======================================-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">

    <!-- ======================================  SELECT 2 =======================================-->


    <!-- ======================================  CHART JS =======================================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" rel="stylesheet" />
    <!-- ======================================  CHART JS =======================================-->

    <!-- END Custom CSS-->

    <!-- END Custom CSS-->

    @yield('head')
</head>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->




{{-- Include Header  --}}
@include('layouts.admin.header')


{{-- Include navbar --}}
@include('layouts.admin.sidebar')


<!--
<div class="app-content content">
    <div class="content-wrapper">

    </div>
</div>

<div class="content-body">
    <section class="row">
        <div class="col-sm-12">
        </div>
    </section>
</div>
 -->


<div class="app-content content">
    <div class="content-wrapper">



        <div class="content-body">
            <section class="row">
                <div class="col-sm-12">
                    {{-- Yield Content --}}
                    @yield('content')
                </div>
            </section>
        </div>
        </section>

    </div>
</div>


{{-- Include footer --}}
@include('layouts.admin.footer')

<!-- //////////////////////////////////////////////////////////////////////////////////////-->

<script src="{{ asset('app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/ui/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/ui/jquery-sliding-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>

<!-- //////////////////////////////////////////////////////////////////////////////////////-->


<!-- ======================================  SELECT 2 =======================================-->
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<!-- ======================================  SELECT 2 =======================================-->


<!-- ======================================  KOMPONEN =======================================-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- ======================================  KOMPONEN =======================================-->


<!-- ======================================  DATA TABLE =======================================-->
<script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<!-- ======================================  DATA TABLE =======================================-->




<script>
    $(document).ready(function() {
        $('#example').DataTable();
        responsive: true
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>




@yield('pagescript')
</body>

</html>
