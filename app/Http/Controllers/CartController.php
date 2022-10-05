<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = auth()->user()->id;
        $cart->quantity = $request->quantity;
        if ($request->save()) {
            return sendResponse('success', 'Product added to cart successfully.', '200');
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }

    public function update(Request $request, $id)
    {
        $item = Cart::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if ($item) {
            $item->quantity = $request->quantity;
            if ($request->save()) {
                return sendResponse('success', 'Cart Item updated successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }

    public function destroy($id)
    {
        $item = Cart::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if ($item) {
            if ($item->delete()) {
                return sendResponse('success', 'Product removed from cart successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }
}
