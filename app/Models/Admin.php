<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    use SoftDeletes;

    //protected $guarded = [];
    protected static $unguarded = true;

    protected $table = 'admin';
    protected $connection = 'mongodb';
}

