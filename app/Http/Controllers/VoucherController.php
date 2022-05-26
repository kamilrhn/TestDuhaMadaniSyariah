<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    //
    public function show()
    {
        $voucher = Voucher::all();

        return view('voucher.index', compact('voucher'));
    }
}
