@extends('layouts.master')
@section('css')

@endsection
@section('title')
@stop
@section('content')
    <style>
        .btn-danger {
            color: #fff;
            background-color: #0a9a73;
            border-color: #0a9a73;
        }

        .alert {
            position: relative;
            padding: 1rem 1rem;
            margin: 0px 176px;

            border: 1px solid transparent;
            border-radius: 1.25rem;
        }
    </style>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Cart</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOPING CART AREA START -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead>
                                <tbody>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <tr data-id="{{ $id }}">

                                                <td class="cart-product-remove">
                                                    <button class="btn btn-danger btn-sm cart_remove remove_bt"
                                                        style="    padding: 8px 8px;
                    border-radius: 10px;"><i
                                                            class="fa fa-trash-o"></i>Delete</button>
                                                </td>
                                                <td class="cart-product-image">
                                                    <a href="product-details.html"><img
                                                            src="{{ asset('products_imgs/' . $details['img']) }}"
                                                            alt="#"></a>
                                                </td>
                                                <td class="cart-product-info">
                                                    <h4><a href="product-details.html">{{ $details['product_name'] }}</a>
                                                    </h4>
                                                </td>
                                                <td class="cart-product-price">${{ $details['sell_price'] }}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" style="width:50%"
                                                        value="{{ $details['quantity'] }}"
                                                        class="form-control quantity cart_update" min="1" />
                                                </td>


                                                <td class="cart-product-subtotal">
                                                    ${{ $details['sell_price'] * $details['quantity'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    @php $total=0 @endphp
                                    @foreach ((array) session('cart') as $id => $details)
                                        @php $total+=$details['sell_price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>$ {{ $total }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            @if (session()->has('cart'))
                                <div class="btn-wrapper text-right">
                                    @if ($total != '0')
                                        <a href="{{ route('checkout') }}" class="theme-btn-1 btn btn-effect-1">Proceed to
                                            checkout</a>
                                    @endif

                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


    <!-- SHOPING CART AREA END -->
    <script type="text/javascript">
        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function(e) {
            e.preventDefault();
            var ele = $(this);

            $.ajax({
                url: '{{ route('remove_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }

            });



        });
    </script>
@endsection
@section('js')

@endsection
