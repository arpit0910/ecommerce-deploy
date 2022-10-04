<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->product_id = $request->product_id;
        $wishlist->user_id = auth()->user()->id;
        if ($request->save()) {
            return sendResponse('success', 'Product added to wishlist successfully.', '200');
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }

    public function destroy($id)
    {
        $item = Wishlist::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if ($item) {
            if ($item->delete()) {
                return sendResponse('success', 'Product removed from wishlist successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '200');
        }
    }
}
