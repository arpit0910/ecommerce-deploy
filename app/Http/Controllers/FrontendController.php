<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        $categories = Category::where('status', '1')->get();
        $products = Product::where('status', '1')->get();
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.index', compact('cartCount', 'wishlistCount', 'categories', 'products'));
    }
    public function product()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.product', compact('cartCount', 'wishlistCount'));
    }
    public function shop()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.shop', compact('cartCount', 'wishlistCount'));
    }
    public function wishlist()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        $wishlistItems = [];
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
            $wishlistItems = Wishlist::where('user_id', auth()->user()->id)->get();
        }
        return view('frontend.wishlist', compact('wishlistItems', 'cartCount', 'wishlistCount'));
    }
    public function cart()
    {
        $cartItems = [];
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
            $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        }
        return view('frontend.cart', compact('cartItems', 'cartCount', 'wishlistCount'));
    }
    public function checkout()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.checkout', compact('cartCount', 'wishlistCount'));
    }
    public function profile()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.profile', compact('cartCount', 'wishlistCount'));
    }
    public function aboutUs()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.about-us', compact('cartCount', 'wishlistCount'));
    }
    public function orderTracking()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.order-tracking', compact('cartCount', 'wishlistCount'));
    }
    public function contact()
    {
        $cartCount = 0;
        $wishlistCount = 0;
        if (auth()->user()) {
            $cartCount = Cart::where('user_id', auth()->user()->id)->count();
            $wishlistCount = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        return view('frontend.contact', compact('cartCount', 'wishlistCount'));
    }
}
