@extends('layouts.admin.app')

@section('title')
Pengumuman
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
                    <h3 class="card-title text-center">DETAIL PENGUMUMAN</h3>



                </div>
                <div class="card-content collpase show">
                    <br>


                    <div class="card-body card-dashboard">
                        <a :href="'/setting/edit/'+ setting.id" class="btn btn-social btn-min-width mr-1 mb-1 btn-secondary pull-right" class="float-sm-left">
                            <span class="fa fa-pencil"></span> EDIT PENGUMUMAN &nbsp; </a>
                        <br>

                        <table>
                            <tr>
                                <td class="font-14"><b>STATUS</b></td>
                                <td v-if="setting.status == 1" class="font-14">&nbsp;: &nbsp; &nbsp; <span class="badge badge-success"> DIBUKA</span></td>
                                <td v-if="setting.status == 2" class="font-14">&nbsp;: &nbsp; &nbsp; <span class="badge badge-danger"> DITUTUP</span></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td class="font-14"><b>DIMULAI PADA :</b></td>
                                <td class="font-14">&nbsp;: &nbsp; &nbsp; @{{ setting.date }}</td>
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
            setting: JSON.parse(String.raw `{!! json_encode($setting) !!}`),
        },
        methods: {


        }
    })
</script>



@endsection
