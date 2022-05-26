<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_code';
    public $incrementing = false;
    protected $fillable = [
        'voucher_code','date','time','discounted_price','total_price'
    ];

    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class, transaction_code, transaction_code);
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function voucher(){
        return $this->hasOne(Voucher::class, 'voucher_code','voucher_code');
    }
}
