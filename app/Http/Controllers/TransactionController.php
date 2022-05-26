<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Voucher;

class TransactionController extends Controller
{
    //
    public function transProcess(){
        $transaction = new Transaction();
        $transactionDetail = new TransactionDetail();
    }
    
    public function applyVoucher(){
        
    }
    public function addToCart(Request $request,$product_code){
        $product = Product::find($product_code);
        $cartItem = new CartItem();
        $cartItem->item_code = $product->product_code;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();
        return redirect()->back()->withMessage('Item(s) added to Cart!');

    }
}
