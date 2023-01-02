@extends('layouts.admin.app')

@section('title')
Data Web
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
        <strong>Edit Data ?</strong>
        <p>Silahkan Klik Edit Untuk Mengedit : &nbsp; &nbsp;
            <a :href="'/web/edit/'+ web.id" class="btn btn-social btn-min-width mr-1 mb-1 btn-secondary" class="float-sm-left">
                <span class="fa fa-pencil"></span> Edit &nbsp; </a>
            <br>
        </p>
    </div>
    <br>

    <div class="row">
        <div class="col-8">

            <div class="card box-shadow-0 border-info">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">SETTING WEB</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">


                        <table>
                            <tr>
                                <td class="font-14"><b>Judul Web</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{web.title}}</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td class="font-14"><b>Nama Web</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{web.web_name}}</td>
                            </tr>

                            <tr>
                                <td class="font-14"><b>Footer</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{web.footer}}</td>
                            </tr>

                            <tr>
                                <td class="font-14"><b>About</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{web.about}}</td>
                            </tr>

                        </table>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">


            <div class="card box-shadow-0 border-info text-center">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">Logo</h3>


                </div>
                <div class="card-content collpase show">
                    <div class="card-body card-dashboard">
                        <img :src="'/files/logo/' + web.logo" width="130px">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-4">

            <br>
            <div class="card box-shadow-0 border-info text-center">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">SLIDE 1</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">
                        <img :src="'/files/slider/' + web.slide_1" width="180px">


                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">

            <br>
            <div class="card box-shadow-0 border-info text-center">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">SLIDE 2</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">
                        <img :src="'/files/slider/' + web.slide_2" width="180px">


                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">

            <br>
            <div class="card box-shadow-0 border-info text-center">
                <div class="card-header card-head-inverse bg-secondary">
                    <h3 class="card-title text-center">SLIDE 3</h3>


                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">
                        <img :src="'/files/slider/' + web.slide_3" width="180px">



                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
        },
        methods: {


        }
    })
</script>



@endsection

