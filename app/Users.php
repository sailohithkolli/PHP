<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    public function transaction()
    {
        return $this->hasMany('App\Transaction','user_id');
    }
    
}
?>