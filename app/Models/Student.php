<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nisn', 'name', 'no_exam', 'class', 'status', 'message', 'created_at', 'updated_at'];
}
