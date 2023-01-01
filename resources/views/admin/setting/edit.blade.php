@extends('layouts.admin.app')

@section('title')
Edit Pengumuman
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
                    <h3 class="card-title text-center">EDIT PENGUMUMAN</h3>



                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">

                        <form @submit.prevent="submitForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="issueinput6">Ubah Status</label>
                                <select id="issueinput6" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" v-model="status">
                                    <option :value="1">DIBUKA</option>
                                    <option :value="2">DITUTUP</option>

                                </select>
                            </div>

                            <br>

                            <fieldset class="form-group">
                                <label for="basicInput">Tanggal Mulai Pengumuman</label>
                                <input type="date" class="form-control" id="basicInput" v-model="date">

                                <br>
                                <label for="basicInput">Jam Mulai Pengumuman</label>
                                <input type="time" class="form-control" id="basicInput" v-model="time">
                            </fieldset>

                            <br>
                            <br>
                            <a class="btn btn-primary" href="/setting"> Kembali</a>
                            &nbsp; <button type="submit" class="btn btn-success"> simpan</button>
                        </form>


                    </div>
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
            setting: JSON.parse(String.raw `{!! json_encode($setting) !!}`),
            status: '',
            date: '',
            time: '',
        },
        methods: {

            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                // console.log('submitted');
                let vm = this;
                vm.loading = true;
                axios.patch('/setting/{!! $setting->id !!}', {
                        status: this.status,
                        date: this.date,
                        time: this.time,
                        created_at: this.created_at,
                        updated_at: this.updated_at,
                    })
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Pengumuman berhasil diperbaharui.',
                            icon: 'success',
                            allowOutsideClick: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/setting';
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
