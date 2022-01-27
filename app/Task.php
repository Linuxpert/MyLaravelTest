<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'descrizione',
        'data inizio',
        'data fine'
    ];
}
