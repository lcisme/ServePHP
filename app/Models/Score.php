<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected  $table = 'scores';
    protected $primaryKey = 'csid';
    protected  $fillable = [
        'mark',
        'result',
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
}
