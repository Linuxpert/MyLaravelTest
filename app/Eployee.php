<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eployee extends Model
{
    protected $fillable = [
        'name',
        'surname'
    ];
}
