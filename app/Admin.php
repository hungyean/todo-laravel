<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    //protected $table = 'my_admins';
    //public $timestamps = false;
    protected $table = "admins";
    // public $timestamps= false;
    // protected $dateFormat = 'U';
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
    // const created_at ='create_time';
    // const updated_at = 'update_time';
}
