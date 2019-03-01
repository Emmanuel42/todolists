<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    
    
    Protected $primaryKey = "id_coms";
    
    public $timestamps = false;
    
    protected $connection = 'todolists';
}
