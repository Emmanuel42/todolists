<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    
    
    Protected $primaryKey = "id_lists";
    
    public $timestamps = false;
    
    protected $connection = 'todolists';
}
