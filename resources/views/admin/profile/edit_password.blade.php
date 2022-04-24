@extends('layouts.admin.app')

@section('title')
Profile
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


    <div class="row">
        <div class="col-12">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">GANTI PASSWORD</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">

                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                            <form @submit.prevent="submitForm" enctype="multipart/form-data">
                                <fieldset class="form-group">
                                    <label for="basicInput">Password Baru</label>
                                    <input type="text" class="form-control" id="basicInput" v-model="password">
                                </fieldset>
                                <br>
                                <br>
                                <a class="btn btn-primary" href="/profile"> Kembali</a>
                                &nbsp; <button type="submit" class="btn btn-success"> simpan</button>
                            </form>
                        </div>






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
            password: '',

        },
        methods: {

            submitForm: function() {
                this.sendData();
            },
            sendData: function() {
                // console.log('submitted');
                let vm = this;
                vm.loading = true;
                axios.patch('/profile/{{auth()->user()->id}}', {
                        password: this.password,
                        created_at: this.created_at,
                        updated_at: this.updated_at,
                    })
                    .then(function(response) {
                        vm.loading = false;
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Password berhasil diperbaharui.',
                            icon: 'success',
                            allowOutsideClick: false,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/profile';
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