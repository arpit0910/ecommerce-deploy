@extends('frontend.layouts.main')
@section('content')
<!-- <div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('frontend.index')}}">Home</a>
                </li>
                <li class="active">Wishlist </li>
            </ul>
        </div>
    </div>
</div> -->
<div class="cart-main-area pt-115 pb-120">
    <div class="container">
        @if(count($wishlistItems) > 0)
        <h3 class="cart-page-title">Your Wishlist Items</h3>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive cart-table-content wishlist-table-content">
                    @if(count($wishlistItems) > 0)
                    <table class="wishlist-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wishlistItems as $item)
                            <tr class="product-detail-card">
                                <td class="product-thumbnail">
                                    <img src="{{asset('assets/images/images.png')}}" alt="" class="w-75">
                                </td>
                                <td class="product-name">{{ucfirst($item->Product->name)}}</td>
                                <td class="product-price-cart"><span class="">₹</span><span class="ml-2 pl-1 amount">{{$item->Product->mrp}}</span></td>
                                <td class="product-wishlist-cart">
                                    <a href="javascript:void(0)" class="add-to-cart-button" data-product_id="{{$item->Product->id}}">Add To Cart</a>
                                    <a href="javascript:void(0)" class="remove-from-wishlist-button" data-id="{{$item->id}}"><i class="icon_close"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h2 class="text-center">
                        No Product is in your Wishlist
                    </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-js')
<script>
    $('.remove-from-wishlist-button').click(function() {
        let id = $(this).data('id');
        $.ajax({
            url: `{{route('wishlist.delete')}}`,
            method: "DELETE",
            data: {
                "_token": "{{csrf_token()}}",
                "id": id
            },
            success: function(response) {
                if (response.data == 'success') {
                    let wishlistCount = parseInt($('.wishlist-hidden-count').val());
                    $('.wishlist-table').find(`a[data-id="${id}"]`).closest('tr').addClass('d-none');
                    $('.wishlist-count').html(wishlistCount - 1);
                    $('.wishlist-hidden-count').val(wishlistCount - 1);
                    if (wishlistCount - 1 == 0) {
                        $('.wishlist-table-content').html('<h2 class="text-center">No Product is in your Wishlist</h2>');
                        $('.wishlist-page-title').addClass('d-none');
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
@endpush