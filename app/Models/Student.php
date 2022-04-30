<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nisn', 'name', 'no_exam', 'class', 'status', 'message', 'nama_ortu', 'tempat_tgl_lahir', 'created_at', 'updated_at'];
}
