@php

use App\Models\Web;

$web = Web::first();

@endphp

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Website cek kelulusan {{$web->web_name }}">
    <meta name="keywords" content="Website cek kelulusan {{$web->web_name }}">
    <meta name="author" content="ZIFAU CODE">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="/files/logo/{{ $web->logo}}">
    <link rel="shortcut icon" type="image/x-icon" href="/files/logo/{{ $web->logo}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/checkboxes-radios.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-callout.css">

    <!-- ======================================  DATA TABLE =======================================-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- ======================================  DATA TABLE =======================================-->

    <!-- ======================================  SELECT 2 =======================================-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">

    <!-- ======================================  SELECT 2 =======================================-->


    <!-- ======================================  CHART JS =======================================-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" rel="stylesheet" />
    <!-- ======================================  CHART JS =======================================-->

    <!-- ======================================  CHAT ===========================================-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/chat-application.css">
    <!-- ======================================  CHAT ===========================================-->

    <!-- ======================================  FORM WIZARD ===========================================-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/pickers/daterange/daterange.css">
    <!-- ======================================  CHAT ===========================================-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/extended/form-extended.css">




    <!-- END Custom CSS-->





    @yield('head')
</head>




<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->




{{-- Include Header  --}}
@include('layouts.header')


{{-- Include navbar --}}
@include('layouts.sidebar')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{-- Yield Content --}}
            @yield('content')
        </div>
    </div>
</div>


{{-- Include footer --}}
@include('layouts.footer')

<!-- //////////////////////////////////////////////////////////////////////////////////////-->
<script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script type="text/javascript" src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="../../../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
<script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/extensions/block-ui.js" type="text/javascript"></script>

<!-- //////////////////////////////////////////////////////////////////////////////////////-->


<!-- ======================================  SELECT 2 =======================================-->
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
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
<script src="../../../app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>





<!-- ==============================================  CHART =====================================================-->
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/bar.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/bar-stacked.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/bar-multi-axis.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/column-stacked.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/charts/chartjs/bar/column-multi-axis.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<!-- ==============================================  CHART =====================================================-->


<!-- ==============================================  CHAT =====================================================-->
<script src="../../../app-assets/js/scripts/pages/chat-application.js" type="text/javascript"></script>
<!-- ==============================================  CHAT =====================================================-->


<!-- ==============================================  FORM WIZARD =====================================================-->
<script src="../../../app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>

<script type="text/javascript" src="../../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="../../../app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/extended/form-typeahead.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/extended/form-inputmask.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/extended/form-maxlength.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script type="text/javascript" src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/extended/typeahead/handlebars.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js" type="text/javascript"></script>
<!-- ==============================================  FORM WIZARD =====================================================-->







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