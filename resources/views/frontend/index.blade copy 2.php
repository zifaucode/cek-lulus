    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $web->title }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/files/logo/{{ $web->logo}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../frontend/css/styles.css" rel="stylesheet" />

        <style>
            [v-cloak]>* {
                display: none;
            }

            [v-cloak]::before {
                content: "loading...";
            }
        </style>
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="/files/logo/{{ $web->logo}}" width="37px" alt="avatar">&nbsp; {{ $web->web_name }}</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="/files/slider/{{ $web->slide_1}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/files/slider/{{ $web->slide_2}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/files/slider/{{ $web->slide_3}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div id="app" v-cloak>
            <section class="page-section portfolio" id="portfolio">
                <div class="container">

                    <div id="kick-start" class="card text-center bg-warning">
                        <div class="card-header">
                            <h4 class="card-title text-white" id="demo"></h4>


                        </div>
                    </div>
                    <br>
                    @if($setting->status == 1)
                    <div class="col-xl-12" v-if="currentDate() <= 0">
                        <div class="card box-shadow-0 border-info">
                            <div class="card-header card-head-inverse bg-secondary">
                                <h3 class="card-title text-center text-white">SILAHKAN CEK KELULUSAN ANDA</h3>
                            </div>
                            <div class="card-content collpase show">
                                <br>
                                <div class="card-body card-dashboard text-center">
                                    <p class="card-text">MASUKAN NO UJIAN DAN KLIK TOMBOL CEK</p>
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
                                    @if($req_search != null)
                                    <div v-for="st in student" v-if="search == st.no_exam ">
                                        <div class="alert alert-success" role="alert" v-if="st.status == 1">
                                            <strong>Selamat! @{{ st.name }}</strong>
                                            <p>@{{ st.message }}</p>
                                            <br>
                                            <div class="text-left">
                                                <h5 class="text-dark"><b>NAMA</b>&nbsp; &nbsp; &nbsp; &nbsp; : @{{ st.name }}</h5>
                                                <br>
                                                <h5 class="text-dark"><b>KELAS</b>&nbsp; &nbsp; &nbsp; &nbsp; : @{{ st.class }}</h5>
                                                <br>
                                                <h5 class="text-dark"><b>STATUS</b>&nbsp; &nbsp; &nbsp; : <span class="badge badge-success"> LULUS</span></h5>
                                            </div>
                                            <div class="text-center">
                                                <a :href="'/cetak/'+ st.id"><button class="btn btn-sm btn-success">CETAK SKL</button></a>
                                            </div>
                                        </div>
                                        <div class="alert alert-danger" role="alert" v-if="st.status == 2">

                                            <strong>Mohon Maaf @{{ st.name }}</strong>
                                            <p>@{{ st.message }}</p>
                                            <br>
                                            <div class="text-left">
                                                <h5 class="text-dark"><b>NAMA</b>&nbsp; &nbsp; &nbsp; &nbsp; : @{{ st.name }}</h5>
                                                <br>
                                                <h5 class="text-dark"><b>KELAS</b>&nbsp; &nbsp; &nbsp; &nbsp; : @{{ st.class }}</h5>
                                                <br>
                                                <h5 class="text-dark"><b>STATUS</b>&nbsp; &nbsp; &nbsp; : <span class="badge badge-danger"> DITUNDA</span></h5>
                                            </div>
                                        </div>
                                    </div>

                                    @else
                                    -
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div id="kick-start" class="card text-center bg-warning">
                        <div class="card-header">
                            <h4 class="card-title text-white">PENGUMUMAN KELULUSAN BELUM DI BUKA</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                        </div>
                    </div>
                    @endif

                </div>
            </section>
        </div>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>Copyright &copy; {{ $web->footer }} <?php echo date("Y"); ?></small>
            </div>
        </div>




        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../../frontend/js/scripts.js"></script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                student: JSON.parse(String.raw `{!! json_encode($student) !!}`),
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
