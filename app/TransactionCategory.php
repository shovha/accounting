<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    protected $fillable=['name','transaction_type_id'];
    public function transactionType(){
        return $this->belongsTo(TransactionType::class,'transaction_type_id');
    }
}
