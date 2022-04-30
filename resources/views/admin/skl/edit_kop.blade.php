@extends('layouts.admin.app')

@section('title')
Setting SKL
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

    <div class="row">
        <div class="col-12">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">EDIT KOP SURAT</h3>


                </div>
                <div class="card-content collpase show">
                    <form @submit.prevent="submitForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Nama Dinas</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_nama_disdik">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Nama Sekolah</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_nama_sekolah">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Tahun Pelajaran</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_th_pelajaran">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Alamat</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_alamat">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Telepon</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_telepon">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Kode Pos</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_pos">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Website</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_website">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Email</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="kop_email">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-lg-12 col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Upload Logo Dinas</label>
                                            <input type="file" ref="kop_logo_dinas" class="form-control-file" v-on:change="handleLogoUpload" id="basicInputFile">
                                        </fieldset>
                                    </div>
                                    <br>
                                    <div>
                                        <button class="btn btn-success"> Simpan</button>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

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

            kop_nama_disdik: '{!! $school->kop_nama_disdik !!}',
            kop_nama_sekolah: '{!! $school->kop_nama_sekolah !!}',
            kop_th_pelajaran: '{!! $school->kop_th_pelajaran !!}',
            kop_alamat: '{!! $school->kop_alamat !!}',
            kop_telepon: '{!! $school->kop_telepon !!}',
            kop_pos: '{!! $school->kop_pos !!}',
            kop_website: '{!! $school->kop_website !!}',
            kop_email: '{!! $school->kop_email !!}',
            kop_logo_dinas: '',
            school: JSON.parse(String.raw `{!! json_encode($school) !!}`),
        },
        methods: {
            handleLogoUpload: function() {
                this.kop_logo_dinas = this.$refs.kop_logo_dinas.files[0];
                console.log(this.kop_logo_dinas['name']);
            },
            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                let vm = this;

                let data = {
                    id: vm.id,
                    kop_logo_dinas: vm.kop_logo_dinas,

                    kop_nama_disdik: this.kop_nama_disdik,
                    kop_nama_sekolah: this.kop_nama_sekolah,
                    kop_th_pelajaran: this.kop_th_pelajaran,
                    kop_alamat: this.kop_alamat,
                    kop_telepon: this.kop_telepon,
                    kop_pos: this.kop_pos,
                    kop_website: this.kop_website,
                    kop_email: this.kop_email,
                    kop_logo_dinas_name: this.kop_logo_dinas['name']

                }

                let formData = new FormData();
                for (var key in data) {
                    formData.append(key, data[key]);
                }
                axios.post('/skl/edit_kop2/{{$school->id}}', formData)
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data Kop Surat berhasil Diupdate.',
                            icon: 'success',
                            allowOutsideClick: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/skl';
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