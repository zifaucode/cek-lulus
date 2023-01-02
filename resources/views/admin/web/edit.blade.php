@extends('layouts.admin.app')

@section('title')
Admin
@endsection


@section('head')
<style>
    [v-cloak]>* {
        display: none;
    }

    [v-cloak]::before {
        content: "loading...";
    }
</style>
@endsection

@section('content')

<div id="app" v-cloak>

    <br>
    <form @submit.prevent="submitForm" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-8">

                <div class="card box-shadow-0 border-info">
                    <div class="card-header card-head-inverse bg-secondary">
                        <h3 class="card-title text-center">SETTING WEB</h3>


                    </div>
                    <div class="card-content collpase show">
                        <br>


                        <div class="card-body card-dashboard">


                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Judul Web</label>
                                        <input type="text" class="form-control" id="basicInput" v-model="title">
                                    </fieldset>
                                </div>
                                <br>
                                <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Nama Web</label>
                                        <input type="text" class="form-control" id="basicInput" v-model="web_name">
                                    </fieldset>
                                </div>
                                <br>
                                <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Footer</label>
                                        <input type="text" class="form-control" id="basicInput" v-model="footer">
                                    </fieldset>
                                </div>
                                <br>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicTextarea">About Web</label>
                                        <textarea class="form-control" id="basicTextarea" rows="4" v-model="about"></textarea>
                                    </fieldset>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">


                <div class="card box-shadow-0 border-info">
                    <div class="card-header card-head-inverse bg-secondary text-center">
                        <h3 class="card-title">Logo</h3>


                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body card-dashboard">
                            <div class="col-lg-12 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Upload Logo</label>
                                    <input type="file" ref="logo" class="form-control-file" v-on:change="handleLogoUpload" id="basicInputFile">
                                </fieldset>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- <div class="row">
            <div class="col-4">

                <br>
                <div class="card box-shadow-0 border-info ">
                    <div class="card-header card-head-inverse bg-secondary text-center">
                        <h3 class="card-title">SLIDE 1</h3>


                    </div>
                    <div class="card-content collpase show">
                        <br>


                        <div class="card-body card-dashboard">
                            <div class="col-lg-12 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Upload Slide 1</label>
                                    <input type="file" ref="slide_1" class="form-control-file" v-on:change="handleSlide1Upload" id="basicInputFile">
                                </fieldset>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">

                <br>
                <div class="card box-shadow-0 border-info ">
                    <div class="card-header card-head-inverse bg-secondary text-center">
                        <h3 class="card-title">SLIDE 2</h3>


                    </div>
                    <div class="card-content collpase show">
                        <br>


                        <div class="card-body card-dashboard">
                            <div class="col-lg-12 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Upload Slide 2</label>
                                    <input type="file" ref="slide_2" class="form-control-file" v-on:change="handleSlide2Upload" id="basicInputFile">
                                </fieldset>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">

                <br>
                <div class="card box-shadow-0 border-info ">
                    <div class="card-header card-head-inverse bg-secondary text-center">
                        <h3 class="card-title ">SLIDE 3</h3>


                    </div>
                    <div class="card-content collpase show">
                        <br>


                        <div class="card-body card-dashboard">
                            <div class="col-lg-12 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Upload Slide 3</label>
                                    <input type="file" ref="slide_3" class="form-control-file" v-on:change="handleSlide3Upload" id="basicInputFile">
                                </fieldset>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="bs-callout-primary callout-border-left mt-1 p-1">
            <strong>Edit Data ?</strong>
            <p>Silahkan Klik Save Untuk Menyimpan : &nbsp; &nbsp;
                <button type="submit" class="btn btn-success">
                    <span class="fa fa-check"></span> Save &nbsp;
                </button>
                <br>
            </p>
        </div>
    </form>

</div>

@endsection

@section('pagescript')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            web: JSON.parse(String.raw `{!! json_encode($web) !!}`),
            title: '{!! $web->title !!}',
            web_name: '{!! $web->web_name !!}',
            footer: '{!! $web->footer !!}',
            about: '{!! $web->about !!}',
            logo: '',
            slide_1: '',
            slide_2: '',
            slide_3: '',
        },
        methods: {

            handleSlide1Upload: function() {
                this.slide_1 = this.$refs.slide_1.files[0];
                console.log(this.slide_1['name']);
            },

            handleSlide2Upload: function() {
                this.slide_2 = this.$refs.slide_2.files[0];
            },

            handleSlide3Upload: function() {
                this.slide_3 = this.$refs.slide_3.files[0];
            },
            handleLogoUpload: function() {
                this.logo = this.$refs.logo.files[0];
            },
            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                let vm = this;

                let data = {
                    id: vm.id,
                    slide_1: vm.slide_1,
                    slide_2: vm.slide_2,
                    slide_3: vm.slide_3,
                    logo: vm.logo,

                    title: this.title,
                    web_name: this.web_name,
                    footer: this.footer,
                    about: this.about,
                    slide_1_name: this.slide_1['name'],
                    slide_2_name: this.slide_2['name'],
                    slide_3_name: this.slide_3['name'],
                    logo_name: this.logo['name']

                }

                let formData = new FormData();
                for (var key in data) {
                    formData.append(key, data[key]);
                }
                axios.post('/web/edit2/{{$web->id}}', formData)
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data Web berhasil disimpan.',
                            icon: 'success',
                            allowOutsideClick: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/web';
                            }
                        })
                        // console.log(response);
                    })
                    .catch(function(error) {
                        vm.loading = false;
                        console.log(error);
                        Swal.fire(
                            'Terjadi Kesalahan!',
                            'Pastikan data terisi dengan benar.',
                            'error'
                        )
                    });
            },
        }
    })
</script>



@endsection
