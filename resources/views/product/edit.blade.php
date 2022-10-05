@extends('layouts.main')
@push('page-css')
<link href="{{asset('assets/summernote/summernote-lite.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h4 class="title nk-block-title">Edit Product</h4>
    </div>
</div>
<div class="card card-bordered col-12">
    <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
        <div class="card-inner p-2">
            @csrf
            @method('patch')
            <div class="row g-4">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="category_id" data-search="on" required>
                                <option value="" disabled selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{($product->category_id == $category->id) ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">SKU <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="sku" name="seller_sku_id" value="{{$product->seller_sku_id}}" placeholder="SKU" required>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input class="form-control" id="name" placeholder="Name" name="name" value="{{$product->name}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">MRP <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="mrp" placeholder="Enter mrp" value="{{$product->mrp}}" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">MSP</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="msp" placeholder="Enter msp" value="{{$product->msp}}">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Procurement SLA <span class="text-muted">(days)</span></label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="procurement_sla" placeholder="Enter procurement sla" value="{{$product->procurement_sla}}">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label">Stock</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="stock" placeholder="Enter stock" value="{{$product->stock}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Local Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="local_delivery_charges" placeholder="Enter local delivery charges" value="{{$product->local_delivery_charges}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Regional Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="regional_delivery_charges" placeholder="Enter regional delivery charges" value="{{$product->regional_delivery_charges}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">National Delivery Charges</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="national_delivery_charges" placeholder="Enter national delivery charges" value="{{$product->national_delivery_charges}}">
                        </div>
                    </div>
                </div>
                @php
                $weightUnits = [
                'g','kg','pound','ounce'
                ];
                $otherUnits = [
                'mm','cm','meter'
                ];
                @endphp
                <div class="col-3 ">
                    <div>
                        <label class="form-label"> Weight</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="weight" placeholder="Enter Weight" class="form-control" step="0.01" value="{{$product->weight}}">
                        <div class="input-group-append">
                            <select class="form form-control ri-select" name="weight_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($weightUnits as $weightUnit)
                                <option value="{{$weightUnit}}" {{($product->weight_unit == $weightUnit) ? 'selected':''}}>{{strtoupper($weightUnit)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label class="form-label"> Length</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="length" placeholder="Enter Length" class="form-control" step="0.01" value="{{$product->length}}">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="length_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}" {{($product->length_unit == $otherUnit) ? 'selected':''}}>{{strtoupper($otherUnit)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label class="form-label"> Breadth</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="breadth" placeholder="Enter Breadth" class="form-control" step="0.01" value="{{$product->breadth}}">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="breadth_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}" {{($product->breadth_unit == $otherUnit) ? 'selected':''}}>{{strtoupper($otherUnit)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div>
                        <label class="form-label"> Height</label>
                    </div>
                    <div class="input-group ">
                        <input type="number" name="height" placeholder="Enter Height" class="form-control" step="0.01" value="{{$product->height}}">
                        <div class="input-group-append">
                            <select class="form form-control  ri-select" name="height_unit" data-search="on">
                                <option value="" disabled selected>Select</option>
                                @foreach($otherUnits as $otherUnit)
                                <option value="{{$otherUnit}}" {{($product->height_unit == $otherUnit) ? 'selected':''}}>{{strtoupper($otherUnit)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">HSN Code</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="hsn_code" placeholder="Enter hsn code" value="{{$product->hsn_code}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Tax Percentage</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="tax_percentage" placeholder="Enter tax percentage" value="{{$product->tax_percentage}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Country Of Origin</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="country_of_origin" placeholder="Enter country of origin" value="{{$product->country_of_origin}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Manufacturer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="manufacturer_details" placeholder="Enter manufacturer details" value="{{$product->manufacturer_details}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Packer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="packer_details" placeholder="Enter packer details" value="{{$product->packer_details}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Importer Details</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="importer_details" placeholder="Enter importer details" value="{{$product->importer_details}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Minimum Age</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="minimum_age" placeholder="Enter minimum age" value="{{$product->minimum_age}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Maximum Age</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="maximum_age" placeholder="Enter maximum age" value="{{$product->maximum_age}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Ideal For</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="ideal_for" placeholder="Enter ideal for" value="{{$product->ideal_for}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Fabric</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="fabric" placeholder="Enter fabric" value="{{$product->fabric}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label">Color</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="color" placeholder="Enter color" value="{{$product->color}}">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <div class="form-control-wrap">
                            <textarea type="text" class="form-control summernote" name="description" placeholder="Enter description">{{$product->description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Key Features</label>
                        <div class="form-control-wrap">
                            <textarea type="text" class="form-control summernote" name="key_features" placeholder="Enter key features">{{$product->key_features}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div class="form-control-wrap">
                            <select class="form form-control form-control-lg ri-select" name="status" data-search="on">
                                <option value="1" {{($product->status == 1) ? 'selected':''}}>Active</option>
                                <option value="0" {{($product->status == 0) ? 'selected':''}}>Deactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-lg btn-primary">Update Product</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('page-scripts')
<script src="{{asset('assets/summernote/summernote-lite.min.js')}}"></script>
@endpush
@push('custom-js')
<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'Enter details',
            tabsize: 2,
            height: 120,
        });
    });
</script>
@endpush