<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_students extends Model
{
    //
    protected $table="master_students";
    protected $guarded=[];
    
     public function tbl_address()
    {
        return $this->hasMany('App\master_address');
    }
}
