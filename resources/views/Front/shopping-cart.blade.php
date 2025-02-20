@extends('Front.index')
@section('fashion')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('shop') }}">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                @php
                                    $fimalTotal = 0;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="product__cart__item">
                                            <input type="hidden" class="product_id" value="{{ $item->id }}">
                                            <div class="product__cart__item__pic productID" id="productID">
                                                <img style="height: 150px"
                                                    src="{{ asset('storage/product/thumbnail/' . $item->productName->thumbnail) }}"
                                                    alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $item->productName->title }}</h6>
                                                <h5>${{ $item->productName->price }}</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" class="quantity update-cart"
                                                        value="{{ $item->quantity }}">
                                                </div>
                                            </div>
                                        </td>
                                        @php
                                            $total = $item->productName->price * $item->quantity;
                                            $fimalTotal += $total;
                                        @endphp
                                        <td class="cart__price">$ {{ $total }}</td>
                                        <td class="cart__close remove-from-cart" data-product-id="{{ $item->id }}"><i
                                                class="fa fa-close"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#" class="update-cart">
                                    <i class="fa fa-spinner" onclick="updateCart()"></i>
                                    Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ {{ $fimalTotal }}</span></li>
                            <li>Total <span>$ {{ $fimalTotal }}</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection

@push('scripts')
    <script>
        $(".update-cart").click(function() {

            const rows = document.querySelectorAll('#content tr');
            let cart = [];
            rows.forEach(row => {
                const productId = row.querySelector('.product_id').value;
                const quantity = row.querySelector('.quantity.update-cart').value;
                let product = {
                    product_id: productId,
                    quantity: quantity,
                }
                cart.push(product);
            });
            $.ajax({
                url: "{{ route('updateCart') }}",
                type: "POST",
                data: {
                    data: JSON.stringify(cart),
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(response) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Cart Updated successfully!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(e) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: e.responseJSON.message,
                    });
                }

            });
        });


        $('.remove-from-cart').click(function() {

            var cartId = $(this).closest('.remove-from-cart').data('product-id');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to undo this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    $('[data-product-id="' + cartId + '"]').remove();

                    $.ajax({
                        url: '/remove-from-cart/' + cartId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            );
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            Swal.fire(
                                'Oops...',
                                'Something went wrong while removing the product.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>
@endpush
