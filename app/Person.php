<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=['name','mobile','email'];
    public function transaction(){
        return $this->hasMany(Transaction::class,'person_id');
    }
}
