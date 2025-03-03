<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'joblisting';
    protected $fillable = ['title','salary'];
}
