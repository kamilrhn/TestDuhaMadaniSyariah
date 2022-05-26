<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = 'transaction_detail';
    // protected $primaryKey = 'transaction_code';
    // public $incrementing = false;
    protected $fillable = [
        'transaction_code','item_code','qty','harga_diskon'
    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transaction_code', 'transaction_code');
    }
    public function product(){
        return $this->hasOne(Product::class, 'product_code', 'product_code');
    }
}
