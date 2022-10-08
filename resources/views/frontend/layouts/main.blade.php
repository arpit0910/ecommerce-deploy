<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ecommerce</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('page-css')
    @stack('custom-css')
</head>

<body>
    <div class="main-wrapper">
        @include('frontend.layouts.partials.header')
        <div class="alert alert-danger alert-dismissible fade d-none" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-success alert-dismissible fade d-none" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @yield('content')
        @include('frontend.layouts.partials.footer')
    </div>
    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @stack('page-scripts')
    @stack('custom-js')

    <script>
        $('.add-to-cart-button').click(function() {
            let productId = $(this).data('product_id');
            $.ajax({
                url: "{{route('cart.store')}}",
                method: "POST",
                data: {
                    "_token": "{{csrf_token()}}",
                    "product_id": productId,
                    "quantity": '1'
                },
                success: function(response) {
                    if (response.data == 'success') {
                        let cartCount = parseInt($('.cart-hidden-count').val());
                        $('.cart-count').html(cartCount + 1);
                        $('.cart-hidden-count').val(cartCount + 1);
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
        $('.add-to-wishlist-button').click(function() {
            let productId = $(this).data('product_id');
            $.ajax({
                url: "{{route('wishlist.store')}}",
                method: "POST",
                data: {
                    "_token": "{{csrf_token()}}",
                    "product_id": productId,
                },
                success: function(response) {
                    if (response.data == 'success') {
                        let wishlistCount = parseInt($('.wishlist-hidden-count').val());
                        $('.wishlist-count').html(wishlistCount + 1);
                        $('.wishlist-hidden-count').val(wishlistCount + 1);
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
</body>

</html>