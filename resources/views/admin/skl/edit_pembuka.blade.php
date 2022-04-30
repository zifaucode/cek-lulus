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
                    <h3 class="card-title text-center">EDIT PEMBUKA SURAT</h3>


                </div>
                <div class="card-content collpase show">
                    <form @submit.prevent="submitForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Nama Surat</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="nama_surat">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput">No Surat</label>
                                            <input type="text" class="form-control" id="basicInput" v-model="no_surat">
                                        </fieldset>
                                    </div>
                                    <br>

                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <label for="basicInput">Pembuka Surat</label>
                                        <textarea id="userinput8" rows="5" class="form-control border-primary" v-model="pembuka_surat"></textarea>
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
            nama_surat: JSON.parse(String.raw `{!! json_encode($school->nama_surat) !!}`),
            pembuka_surat: '{!! $school->pembuka_surat !!}',
            no_surat: '{!! $school->no_surat !!}',
            school: JSON.parse(String.raw `{!! json_encode($school) !!}`),
        },
        methods: {
            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                // console.log('submitted');
                let vm = this;
                vm.loading = true;
                axios.post('/skl/edit_pembuka2/{{ $school->id }}', {
                        nama_surat: this.nama_surat,
                        pembuka_surat: this.pembuka_surat,
                        no_surat: this.no_surat,
                        created_at: this.created_at,
                        updated_at: this.updated_at,
                    })
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data Pembuka Surat berhasil diperbaharui.',
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