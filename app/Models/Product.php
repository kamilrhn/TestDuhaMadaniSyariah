<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    protected $primaryKey = 'product_code';
    public $incrementing = false;
    protected $fillable = [
        'product_name','price','stock'
    ];

    public function transactionDetail(){
        return $this->belongsTo(TransactionDetail::class, product_code, product_code);
    }

    // public function 
}
