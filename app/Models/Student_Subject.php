<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Subject extends Model
{
    use HasFactory;
    protected $table = 'students_subjects';
    protected  $fillable = [
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
}
