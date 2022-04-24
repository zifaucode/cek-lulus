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


<div id="kick-start" class="card">
    <div class="card-header">
        <h4 class="card-title">Selamat datang di Web admin CEK-LULUS !</h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <div class="card-text">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-primary">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-user white font-large-2 float-left"></i>

                                        </div>
                                        <div class="media-body white text-right">
                                            <h3>{{ $total_student }}</h3>
                                            <span>Jumlah Siswa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-user-following white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body white text-right">
                                            <h3>{{ $student_graduated }}</h3>
                                            <span>Siswa Lulus</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card bg-danger">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-user-unfollow white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body white text-right">
                                            <h3>{{ $student_pending }}</h3>
                                            <span>Kelulusan Tertunda</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                        <a href="/web">
                            <div class="card bg-warning">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-screen-desktop white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>Web</h3>
                                                <span>Pengaturan Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('pagescript')

<script>
    new Vue({
        el: '#app',
        data: {

        },
        methods: {


        }
    })
</script>



@endsection