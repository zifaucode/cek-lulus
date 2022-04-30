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
                    <h3 class="card-title text-center">EDIT PENUTUP SURAT</h3>


                </div>
                <div class="card-content collpase show">
                    <form @submit.prevent="submitForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <label for="basicInput">Penutup Surat</label>
                                        <textarea id="userinput8" rows="5" class="form-control border-primary" v-model="penutup_surat"></textarea>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Tempat</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="tempat">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Taanggal</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="tanggal">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Jabatan Penandatangan</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="jabatan_penandatangan">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Nama Penandatangan</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="nama_penandatangan">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Nip Penandatangan</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="nip_penandatangan">
                                        </fieldset>
                                    </div>
                                    <br>



                                    <div class="col-lg-12 col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Upload Tanda Tangan</label>
                                            <input type="file" ref="tanda_tangan" class="form-control-file" v-on:change="handleLogoUpload" id="basicInputFile">
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
            penutup_surat: JSON.parse(String.raw `{!! json_encode($school->penutup_surat) !!}`),
            tempat: '{!! $school->tempat !!}',
            tanggal: '{!! $school->tanggal !!}',
            jabatan_penandatangan: '{!! $school->jabatan_penandatangan !!}',
            nama_penandatangan: '{!! $school->nama_penandatangan !!}',
            nip_penandatangan: '{!! $school->nip_penandatangan !!}',
            tanda_tangan: '',
            school: JSON.parse(String.raw `{!! json_encode($school) !!}`),
        },
        methods: {
            handleLogoUpload: function() {
                this.tanda_tangan = this.$refs.tanda_tangan.files[0];
                console.log(this.tanda_tangan['name']);
            },
            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                let vm = this;

                let data = {
                    id: vm.id,
                    tanda_tangan: vm.tanda_tangan,

                    penutup_surat: this.penutup_surat,
                    tempat: this.tempat,
                    tanggal: this.tanggal,
                    jabatan_penandatangan: this.jabatan_penandatangan,
                    nama_penandatangan: this.nama_penandatangan,
                    nip_penandatangan: this.nip_penandatangan,
                    tanda_tangan_name: this.tanda_tangan['name']

                }

                let formData = new FormData();
                for (var key in data) {
                    formData.append(key, data[key]);
                }
                axios.post('/skl/edit_penutup2/{{$school->id}}', formData)
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data Penutup Surat berhasil Diupdate.',
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