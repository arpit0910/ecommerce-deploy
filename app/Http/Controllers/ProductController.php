<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', '1')->get();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product([
            "category_id"                   => $request->category_id,
            "seller_sku_id"                 => $request->seller_sku_id,
            "name"                          => $request->name,
            "mrp"                           => $request->mrp,
            "msp"                           => $request->msp,
            "procurement_sla"               => $request->procurement_sla,
            "stock"                         => $request->stock ?? 0,
            "local_delivery_charges"        => $request->local_delivery_charges,
            "regional_delivery_charges"     => $request->regional_delivery_charges,
            "national_delivery_charges"     => $request->national_delivery_charges,
            "weight"                        => $request->weight,
            "weight_unit"                   => $request->weight_unit,
            "length"                        => $request->length,
            "length_unit"                   => $request->length_unit,
            "breadth"                       => $request->breadth,
            "breadth_unit"                  => $request->breadth_unit,
            "height"                        => $request->height,
            "height_unit"                   => $request->height_unit,
            "hsn_code"                      => $request->hsn_code,
            "tax_percentage"                => $request->tax_percentage,
            "country_of_origin"             => $request->country_of_origin,
            "manufacturer_details"          => $request->manufacturer_details,
            "packer_details"                => $request->packer_details,
            "importer_details"              => $request->importer_details,
            "minimum_age"                   => $request->minimum_age,
            "maximum_age"                   => $request->maximum_age,
            "ideal_for"                     => $request->ideal_for,
            "fabric"                        => $request->fabric,
            "color"                         => $request->color,
            "description"                   => $request->description,
            "key_features"                  => $request->key_features,
            "status"                        => $request->status,
        ]);
        if ($product->save()) {
            return redirect(route('product.index'))->with('message', 'Product added successfully');
        }
        return redirect(route('product.index'))->with('error', 'An error occured while creating product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::where('status', '1')->get();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $product->category_id                   = $request->category_id;
            $product->seller_sku_id                 = $request->seller_sku_id;
            $product->name                          = $request->name;
            $product->mrp                           = $request->mrp;
            $product->msp                           = $request->msp;
            $product->procurement_sla               = $request->procurement_sla;
            $product->stock                         = $request->stock;
            $product->local_delivery_charges        = $request->local_delivery_charges;
            $product->regional_delivery_charges     = $request->regional_delivery_charges;
            $product->national_delivery_charges     = $request->national_delivery_charges;
            $product->weight                        = $request->weight;
            $product->weight_unit                   = $request->weight_unit;
            $product->length                        = $request->length;
            $product->length_unit                   = $request->length_unit;
            $product->breadth                       = $request->breadth;
            $product->breadth_unit                  = $request->breadth_unit;
            $product->height                        = $request->height;
            $product->height_unit                   = $request->height_unit;
            $product->hsn_code                      = $request->hsn_code;
            $product->tax_percentage                = $request->tax_percentage;
            $product->country_of_origin             = $request->country_of_origin;
            $product->manufacturer_details          = $request->manufacturer_details;
            $product->packer_details                = $request->packer_details;
            $product->importer_details              = $request->importer_details;
            $product->minimum_age                   = $request->minimum_age;
            $product->maximum_age                   = $request->maximum_age;
            $product->ideal_for                     = $request->ideal_for;
            $product->fabric                        = $request->fabric;
            $product->color                         = $request->color;
            $product->description                   = $request->description;
            $product->key_features                  = $request->key_features;
            $product->status                        = $request->status;
            if ($product->update()) {
                return redirect(route('product.index'))->with('message', 'Product updated successfully');
            } else {
                return redirect(route('product.index'))->with('error', 'An error occured while updating product');
            }
        }
        return redirect(route('product.index'))->with('error', 'An error occured while updating product');
    }

    public function toggleStatus(Request $request)
    {
        $product = Product::find($request->id)->update(['status' => $request->status]);
        return response()->json(['success' => 'Status changed successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            if ($product->delete()) {
                return redirect(route('product.index'))->with('message', 'Product deleted successfully');
            }
        } else {
            return redirect(route('product.index'))->with('error', 'An error occured while deleting product');
        }
    }
}
