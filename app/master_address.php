<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_address extends Model {

    protected $table = "master_addresses";
    protected $guarded = [];

    public function tbl_student() {
        return $this->belongsTo('App\master_students', 'id');
    }

}
