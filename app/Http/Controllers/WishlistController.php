<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        $existingWishlist = Wishlist::where('user_id', auth()->user()->id)->where('product_id', $request->product_id)->first();
        if (!$existingWishlist) {
            $wishlist = new Wishlist();
            $wishlist->user_id = auth()->user()->id;
            $wishlist->product_id = $request->product_id;
            if ($wishlist->save()) {
                return sendResponse('success', 'Product added to wishlist successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'Product already in wishlist.', '404');
        }
    }

    public function destroy(Request $request)
    {
        $item = Wishlist::where('id', $request->id)->where('user_id', auth()->user()->id)->first();
        if ($item) {
            if ($item->delete()) {
                return sendResponse('success', 'Product removed from wishlist successfully.', '200');
            } else {
                return sendResponse('error', 'An error occurred. Please try again.', '404');
            }
        } else {
            return sendResponse('error', 'An error occurred. Please try again.', '404');
        }
    }
}
