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
                    <h3 class="card-title text-center">KOP SURAT</h3>


                </div>
                <div class="card-content collpase show">
                    <div class="bs-callout-primary callout-border-left mt-0 p-1">
                        <strong>Edit Kop Surat ?</strong>
                        <p>Silahkan Klik Edit Untuk Update Data Kop surat : &nbsp; &nbsp;
                            <a href="/skl/edit_kop/{{ $school->id}}" class="btn btn-sm btn-secondary" class="float-sm-left">
                                <span class="fa fa-pencil"></span> Edit &nbsp; </a>
                            <br>
                        </p>
                    </div>
                    <br>


                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col-6">

                                <table>
                                    <tr>
                                        <td class="font-14"><b>Nama Dinas</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_nama_disdik}}</td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td class="font-14"><b>Nama Sekolah</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_nama_sekolah}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Tahun Pelajaran</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_th_pelajaran}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Alamat</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_alamat}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Telepon</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_telepon}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Kode Pos</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_pos}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Website</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_website}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Email</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.kop_email}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Logo Dinas</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; <img :src="'/files/logo/' + school.kop_logo_dinas" width="90px"></td>
                                    </tr>


                                </table>
                            </div>
                            <div class="col-6">

                                <div class="card box-shadow-0 border-info text-center">
                                    <div class="card-header card-head-inverse bg-secondary">
                                        <h3 class="card-title text-center">contoh kop</h3>


                                    </div>
                                    <div class="card-content collpase show">
                                        <br>


                                        <div class="card-body card-dashboard">
                                            <img src="/files/contoh/kop_surat.png" width="250px">


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">PEMBUKA</h3>


                </div>
                <div class="card-content collpase show">

                    <div class="bs-callout-primary callout-border-left mt-0 p-1">
                        <strong>Edit Pembuka Surat ?</strong>
                        <p>Silahkan Klik Edit Untuk Update Data Pembuka surat : &nbsp; &nbsp;
                            <a href="/skl/edit_pembuka/{{ $school->id}}" class="btn btn-sm btn-secondary" class="float-sm-left">
                                <span class="fa fa-pencil"></span> Edit &nbsp; </a>
                            <br>
                        </p>
                    </div>

                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col-6">

                                <table>
                                    <tr>
                                        <td class="font-14"><b>Nama Surat</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.nama_surat}}</td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td class="font-14"><b>No Surat</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.no_surat}}</td>
                                    </tr>


                                    <tr>
                                        <td class="font-14"><b>Pembuka Surat :</b></td>
                                        <td class="font-14">&nbsp; &nbsp; &nbsp; <p>
                                                @{{ school.pembuka_surat}}
                                            </p>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                            <div class="col-6">

                                <div class="card box-shadow-0 border-info text-center">
                                    <div class="card-header card-head-inverse bg-secondary">
                                        <h3 class="card-title text-center">contoh pembuka</h3>


                                    </div>
                                    <div class="card-content collpase show">
                                        <br>


                                        <div class="card-body card-dashboard">
                                            <img src="/files/contoh/pembuka.png" width="250px">


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">PENUTUP</h3>


                </div>
                <div class="card-content collpase show">
                    <div class="bs-callout-primary callout-border-left mt-0 p-1">
                        <strong>Edit Penutup Surat ?</strong>
                        <p>Silahkan Klik Edit Untuk Update Data Penutup surat : &nbsp; &nbsp;
                            <a href="/skl/edit_penutup/{{ $school->id}}" class="btn btn-sm btn-secondary" class="float-sm-left">
                                <span class="fa fa-pencil"></span> Edit &nbsp; </a>
                            <br>
                        </p>
                    </div>


                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col-6">

                                <table>
                                    <tr>
                                        <td class="font-14"><b>Penutup Surat</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.penutup_surat}}</td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td class="font-14"><b>Tempat</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.tempat}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-14"><b>Tanggal</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.tanggal}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Jabatan</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.jabatan_penandatangan}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Nama Kepsek</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.nama_penandatangan}}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-14"><b>Nip</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ school.nip_penandatangan}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-14"><b>TTD</b></td>
                                        <td class="font-14">&nbsp;: &nbsp; &nbsp; <img :src="'/files/ttd/' + school.tanda_tangan" width="100px"></td>
                                    </tr>


                                </table>
                            </div>
                            <div class="col-6">

                                <div class="card box-shadow-0 border-info text-center">
                                    <div class="card-header card-head-inverse bg-secondary">
                                        <h3 class="card-title text-center">contoh penutup</h3>


                                    </div>
                                    <div class="card-content collpase show">
                                        <br>


                                        <div class="card-body card-dashboard">
                                            <img src="/files/contoh/penutup.png" width="250px">


                                        </div>
                                    </div>
                                </div>

                            </div>
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
            school: JSON.parse(String.raw `{!! json_encode($school) !!}`),
        },
        methods: {


        }
    })
</script>



@endsection