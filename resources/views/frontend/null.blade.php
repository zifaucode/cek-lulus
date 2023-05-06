<html lang="id">

<head>
    <base href="">
    <title>{{ $web->title ?? 'TITLE' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/files/logo/{{ $web->logo ?? 'LOGO.PNG'}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('fix-theme/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fix-theme/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <style>
        [v-cloak]>* {
            display: none;
        }

        [v-cloak]::before {
            content: "loading...";
        }
    </style>
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <div class="d-flex flex-column flex-root">
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-equal">
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </button>

                                <a href="/">
                                    <h5 class="text-white"><img alt="Logo" src="/files/logo/{{ $web->logo ?? 'LOGO.png'}}" class="h-40px logo" /> &nbsp; &nbsp;{{ $web->title ?? 'TITLE' }} </h5>
                                </a>
                            </div>
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-equal text-end ms-1">
                                <a href="/login" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="app" v-cloak>
                    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                        <!--begin::Alert-->
                        <div class="tex-center mb-6">
                            <img alt="Logo" src="/files/logo/graduates.png" width="180px">
                        </div>

                        <div class="alert alert-dismissible bg-light-warning border border-primary d-flex flex-column flex-sm-row p-5 mb-10">

                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <!--begin::Title-->
                                <h4 class="card-title text-dark" id="demo"></h4>
                                <!--end::Content-->
                            </div>

                        </div>
                        <!--end::Alert-->

                        <br>
                        @if($setting->status == 1)
                        <h3 class="text-white mb-15">SILAHKAN CEK KELULUSAN ANDA</h3>
                        <div class="col-xl-12" v-if="currentDate() <= 0">
                            <div class="card box-shadow-sm">

                                <div class="card-content collpase show">
                                    <br>

                                    <div class="card-body card-dashboard text-center">
                                        <p class="text-dark">MASUKAN NO UJIAN DAN KLIK TOMBOL CEK</p>

                                        <br>
                                        <form @submit.prevent="submitSearch">

                                            <div class="form-group text-center">
                                                <input type="text" v-model="search" class="form-control" id="maxlength-position-inside" placeholder="NO .UJIAN" maxlength="17" />
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-success">CEK</button>
                                        </form>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div id="kick-start" class="card text-center bg-warning">
                        <div class="card-header">


                            <h4 class="card-title text-white">PENGUMUMAN KELULUSAN BELUM DI BUKA</h4>
                            <a class="heading-elements-toggle"></a>

                        </div>
                    </div>
                    @endif
                </div>
            </div>




        </div>

        <div class="mb-0">
            <div class="landing-dark-bg pt-20">

                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <div class="container">
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <a href="#">
                                <img alt="Logo" src="/files/logo/{{ $web->logo}}" class="h-15px h-md-20px" />
                            </a>
                            <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="#">© 2023 {{ $web->title }}.</span>
                        </div>
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">website</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>
    </div>

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('fix-theme/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('fix-theme/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('fix-theme/assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/js/custom/pages/pricing/general.js') }}"></script>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>


<script>
    new Vue({
        el: '#app',
        data: {
            web: JSON.parse(String.raw `{!! json_encode($web) !!}`),
            setting: JSON.parse(String.raw `{!! json_encode($setting) !!}`),
            search: '{{ $req_search }}',
            dt: '{!! $setting->date !!} {!! $setting->time !!}',
            dt2: '{{ $dt }}',

        },
        methods: {
            submitSearch: function() {
                // console.log(this.sort_by)
                window.location.href = `/?search=${this.search}`
            },

            currentDate() {
                let datedb = new Date(this.dt).getTime();
                let current = new Date().getTime();

                let distance = datedb - current;
                return distance;
            },

            currentTime() {
                let timedb = this.time;
                let timeok = this.time2;

                let distanceTime = timedb - timeok;
                return distanceTime;
            }
        }
    })
</script>


<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{!! $setting->date !!} {!! $setting->time !!}").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "<span class='badge badge-success'>HITUNG MUNDUR PENGUMUMAN</span> :  " + days + "Hari - " + hours + "Jam - " +
            minutes + "Menit - " + seconds + "Detik ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "PENGUMUMAN SUDAH DIBUKA";
        }
    }, 1000);
</script>