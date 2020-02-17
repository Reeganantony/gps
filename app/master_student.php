<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_student extends Model
{
    protected $table = "master_students";
    protected $guarded = [];
    
    public function bgroupstudent() {
      return $this->belongsTo('App\master_bgroup','bgroup_id');
    }
    public function mtngstudent() {
      return $this->belongsTo('App\master_mtongue','mtongue_id');
    }
    public function relstudent() {
      return $this->belongsTo('App\master_religion','religion_id');
    }
    public function castetudent() {
      return $this->belongsTo('App\master_caste','caste_id');
    }
    public function commstudent() {
      return $this->belongsTo('App\master_community','comm_id');
    }
}
