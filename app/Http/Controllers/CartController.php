<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $existingCart = Cart::where('user_id', auth()->user()->id)->where('product_id', $request->product_id)->first();
        if (!$existingCart) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->user_id = auth()->user()->id;
            $cart->quantity = $request->quantity;
            if ($cart->save()) {
                return sendResponse('success', 'Product added to cart successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'Product already in cart.', '200');
        }
    }

    public function update(Request $request)
    {
        $item = Cart::where('id', $request->id)->where('user_id', auth()->user()->id)->first();
        if ($item) {
            $item->quantity = $request->quantity;
            if ($item->update()) {
                return sendResponse('success', 'Cart Updated Successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }

    public function destroy(Request $request)
    {
        $item = Cart::where('id', $request->id)->where('user_id', auth()->user()->id)->first();
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
