<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'voucher';
    protected $primaryKey = 'voucher_code';
    public $incrementing = false;
    protected $fillable = [
        'voucher_detail'
    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'voucher_code', 'voucher_code');
    }
}
