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

    <div class="bs-callout-primary callout-border-left mt-1 p-1">
        <strong>Ganti Password ?</strong>
        <p>Silahkan Klik Ganti Password Untuk Mengganti Password : &nbsp; &nbsp;
            <a href="/profile/edit/{{auth()->user()->id}}" class="btn btn-sm btn-secondary" class="float-sm-left">
                <span class="fa fa-pencil"></span> Ganti Password &nbsp; </a>
            <br>
        </p>
    </div>
    <br>

    <div class="row">
        <div class="col-12">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">PROFILE</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">


                        <table>
                            <tr>
                                <td class="font-14"><b>NAME</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; {{auth()->user()->name}}</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td class="font-14"><b>USERNAME</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; {{auth()->user()->username}}</td>
                            </tr>

                            <tr>
                                <td class="font-14"><b>EMAIL</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; {{auth()->user()->email}}</td>
                            </tr>

                            <tr>
                                <td class="font-14"><b>PASSWORD</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; {{auth()->user()->password_view}}</td>
                            </tr>


                        </table>



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

        },
        methods: {


        }
    })
</script>



@endsection