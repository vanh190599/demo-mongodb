<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $guarded = [];
    protected static $unguarded = true;

    protected $table = 'form';
//    protected $connection = 'mongodb';
}

