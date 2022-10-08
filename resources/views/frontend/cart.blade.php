@extends('frontend.layouts.main')
@section('content')
<!-- <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Cart Page </li>
                </ul>
            </div>
        </div>
    </div> -->
<div class="cart-main-area pt-115 pb-120">
    <div class="container">
        @if(count($cartItems) > 0)
        <h3 class="cart-page-title">Your cart items</h3>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                @if(count($cartItems) > 0)
                <div class="table-content table-responsive cart-table-content mb-5">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Until Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="{{asset('assets/images/images.png')}}" alt="" class="w-75">
                                </td>
                                <td class="product-name">{{ucfirst($item->Product->name)}}</td>
                                <td class="product-price-cart"><span class="">₹</span><span class="ml-2 pl-1 amount">{{$item->Product->mrp}}</span></td>
                                <td class="product-quantity pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" data-id="{{$item->id}}" type="text" value="{{$item->quantity}}">
                                    </div>
                                </td>
                                <td class="product-subtotal"><span class="">₹</span><span class="ml-2 pl-1 amount">@php $subTotal =($item->Product->mrp) * ($item->quantity) @endphp {{$subTotal}}</span></td>
                                <td class="product-wishlist-cart">
                                    <a href="javascript:void(0)" class="remove-from-cart-button" data-id="{{$item->id}}"><i class="icon_close"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row cart-table-checkout-cards">
                    <div class="col-lg-4 col-md-6">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                            </div>
                            <div class="tax-wrapper">
                                <p>Enter your destination to get a shipping estimate.</p>
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Country
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Region / State
                                        </label>
                                        <select class="email s-email s-wid">
                                            <option>Bangladesh</option>
                                            <option>Albania</option>
                                            <option>Åland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Belgium</option>
                                        </select>
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Zip/Postal Code
                                        </label>
                                        <input type="text">
                                    </div>
                                    <button class="cart-btn-2" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                            </div>
                            <div class="discount-code">
                                <p>Enter your coupon code if you have one.</p>
                                <form>
                                    <input type="text" required="" name="name">
                                    <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>$260.00</span></h5>
                            <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                                </ul>
                            </div>
                            <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                            <a href="#">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
                @else
                <h2 class="text-center mb-5">No Product is in your Cart</h2>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-js')
<script>
    $('.remove-from-cart-button').click(function() {
        let id = $(this).data('id');
        $.ajax({
            url: `{{route('cart.delete')}}`,
            method: "DELETE",
            data: {
                "_token": "{{csrf_token()}}",
                "id": id
            },
            success: function(response) {
                if (response.data == 'success') {
                    let cartCount = parseInt($('.cart-hidden-count').val());
                    $('.cart-table').find(`a[data-id="${id}"]`).closest('tr').addClass('d-none');
                    $('.cart-count').html(cartCount - 1);
                    $('.cart-hidden-count').val(cartCount - 1);
                    if (cartCount - 1 == 0) {
                        $('.cart-table-content').html('<h2 class="text-center">No Product is in your Cart</h2>');
                        $('.cart-page-title').addClass('d-none');
                        $('.cart-table-checkout-cards').addClass('d-none');
                    }
                } else {
                    $('.alert-danger').addClass('show');
                    $('.alert-danger').html(response.message);
                    $('.alert-danger').removeClass('d-none');
                }
            },
            error: function(response) {

            }
        });
    });
</script>
<!-- <script>
    $('.qtybutton').click(function() {
        let id = $(this).closest('.cart-plus-minus-box').data('id');
        let quantity = $(this).closest('.cart-plus-minus-box').val();
        alert(id);
        $.ajax({
            url: `{{route('cart.update')}}`,
            method: "PATCH",
            data: {
                "_token": "{{csrf_token()}}",
                "id": id,
                "quantity": quantity
            },
            success: function(response) {
                if (response.data == 'success') {
                    let cartCount = parseInt($('.cart-hidden-count').val());
                    $('.cart-table').find(`a[data-id="${id}"]`).closest('tr').addClass('d-none');
                    $('.cart-count').html(cartCount - 1);
                    $('.cart-hidden-count').val(cartCount - 1);
                    if (cartCount - 1 == 0) {
                        $('.cart-table-content').html('<h2 class="text-center">No Product is in your Cart</h2>');
                        $('.cart-page-title').addClass('d-none');
                    }
                } else {
                    $('.alert-danger').addClass('show');
                    $('.alert-danger').html(response.message);
                    $('.alert-danger').removeClass('d-none');
                }
            },
            error: function(response) {

            }
        });
    });
</script> -->
@endpush