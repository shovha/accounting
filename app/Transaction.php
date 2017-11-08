<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable=['transaction_type_id','transaction_category_id',
        'person_id','amount','remarks'];

    public function transactionType(){
        return $this->belongsTo(TransactionType::class,'transaction_type_id');
    }

    public function transactionCategory(){
        return $this->belongsTo(TransactionCategory::class,'transaction_category_id');
    }

    public function person(){
        return $this->belongsTo(Person::class,'person_id');
    }
}
