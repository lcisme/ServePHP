<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'sid';
    protected $keyType ='string';
    protected $fillable = [
        'sid',
        'name',
        'birthday',
        'cid',
        'created_at',
        'updated_at'
    ];

    public function classes(){
        // return 1 object classes
        return $this->belongsTo(Classes::class,"cid","cid");
    }

    public function scopeSearch($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("name","like","%".$search."%");
//                ->orwhere;
        }
        return $query;
    }

    public function scopeCLassFilter($query,$cid=''){
        if ($cid != null && $cid != ''){
            return $query->where("cid",$cid);
        }
        return $query;
    }

    public function scopeStartDate($query,$formDate=''){
        if ($formDate != null && $formDate != ''){
            return $query->where("birthday",">=",$formDate);
        }
        return $query;
    }
    public function scopeEndDate($query,$formDate=''){
        if ($formDate != null && $formDate != ''){
            return $query->where("birthday","<=",$formDate);
        }
        return $query;
    }
}
