<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    
    
    
    Protected $primaryKey = "id_actions";
    
    public $timestamps = false;
    
    protected $connection = 'todolists';
}
