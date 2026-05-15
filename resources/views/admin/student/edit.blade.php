@extends('layouts.admin.app')

@section('title')
Edit Siswa
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <br>
        <div class="card box-shadow-0 border-info">
            <div class="card-header card-head-inverse bg-secondary">
                <h3 class="card-title text-center">Edit Data Siswa</h3>
            </div>
            <div class="card-content collpase show">
                <div class="card-body card-dashboard">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/student/{{ $student->id }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" name="nisn" class="form-control" value="{{ old('nisn', $student->nisn) }}" required>
                        </div>
                        <div class="form-group">
                            <label>No Ujian</label>
                            <input type="text" name="no_exam" class="form-control" value="{{ old('no_exam', $student->no_exam) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="class" class="form-control" value="{{ old('class', $student->class) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <input type="text" name="tempat_tgl_lahir" class="form-control" value="{{ old('tempat_tgl_lahir', $student->tempat_tgl_lahir) }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Orangtua</label>
                            <input type="text" name="nama_ortu" class="form-control" value="{{ old('nama_ortu', $student->nama_ortu) }}">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ old('status', $student->status) == '1' ? 'selected' : '' }}>Lulus</option>
                                <option value="2" {{ old('status', $student->status) == '2' ? 'selected' : '' }}>Ditunda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea name="message" class="form-control">{{ old('message', $student->message) }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success"> Update </button>
                            <a href="/student" class="btn btn-secondary"> Kembali </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
