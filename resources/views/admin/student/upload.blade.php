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


<div class="row">
    <div class="col-12">
        <br>
        <div class="bs-callout-info callout-border-left mt-1 p-1">
            <strong>Upload data siswa !</strong>
            <p>Silahkan Upload Data siswa dengan Format File Ini : <a href="/files/format/EXEL-IMPORT-SISWA.xlsx" class="btn btn-sm btn-primary">Download Format Excel</a> </p>
        </div>
        <br>
        <div class="card box-shadow-0 border-info">
            <div class="card-header card-head-inverse bg-secondary">
                <h3 class="card-title text-center">Upload Data Siswa</h3>


            </div>
            <div class="card-content collpase show">
                <br>


                <div class="card-body card-dashboard">

                    <form method="post" action="/student/import_excel" enctype="multipart/form-data">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">

                            {{ csrf_field() }}

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"> Upload </button>
                        </div>


                    </form>



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