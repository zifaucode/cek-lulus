@php

use App\Models\Web;

$web = Web::first();

@endphp
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">{{ $web->footer }} &copy; <?php echo date("Y"); ?>
        </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Dibuat Dengan <i class="ft-heart pink"></i></span>
    </p>
</footer>