@extends('default.user')

@section('title','cart')

@section('content')

    <main class="ps-main">
        <div class="ps-content pt-10 pb-10">
            <div class="ps-container">
                <div class="ps-cart-listing">
                    <table class="table ps-cart__table">
                        <thead>
                        <tr>
                            <th>All Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a class="ps-product__preview" href="{{ route('product') }}"><img class="mr-15" src="http://skytheme.epizy.com/skytheme/images/product/cart-preview/1.jpg" alt=""> air jordan One mid</a></td>
                            <td>$150</td>
                            <td>
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="2">
                                    <button class="plus"><span>+</span></button>
                                </div>
                            </td>
                            <td>$300</td>
                            <td>
                                <div class="ps-remove"></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="ps-cart__actions">
                        <div class="ps-cart__total">
                            <h3>Total Price: <span> 2599.00 $</span></h3><a class="ps-btn" href="#">Process to checkout<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection