@extends('default.user')

@section('title','product')

@section('content')

    <main class="ps-main">
        <div class="ps-products-wrap inverse pt-80 pb-80">
            <div class="ps-products" data-mh="product-listing">
                <div class="ps-product-action">
                    <div class="ps-product__filter">
                        <select class="ps-select selectpicker">
                            <option value="1">Shortby</option>
                            <option value="2">Name</option>
                            <option value="3">Price (Low to High)</option>
                            <option value="3">Price (High to Low)</option>
                        </select>
                    </div>
                    <div class="ps-pagination">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ps-product__columns">

                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__column">
                        <div class="ps-shoe mb-30">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('product')}}"><i class="ps-icon-heart"></i></a><img src="http://skytheme.epizy.com/skytheme/images/shoe/7.jpg" alt=""><a class="ps-shoe__overlay" href="{{ route('product') }}"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img src="http://skytheme.epizy.com/skytheme/images/shoe/2.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/3.jpg" alt=""><img src="http://skytheme.epizy.com/skytheme/images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{ route('product') }}">Air Jordan 7 Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-product-action">
                    <div class="ps-product__filter">
                        <select class="ps-select selectpicker">
                            <option value="1">Shortby</option>
                            <option value="2">Name</option>
                            <option value="3">Price (Low to High)</option>
                            <option value="3">Price (High to Low)</option>
                        </select>
                    </div>
                    <div class="ps-pagination">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ps-sidebar" data-mh="product-listing">
                <aside class="ps-widget--sidebar ps-widget--category">
                    <div class="ps-widget__header">
                        <h3>Category</h3>
                    </div>
                    <div class="ps-widget__content">
                        <ul class="ps-list--checked">
                            <li class="current"><a href="product-listing.html">Men -> Shirt(521)</a></li>
                        </ul>
                    </div>
                </aside>
                <div class="ps-sticky desktop">
                </div>
                <!--aside.ps-widget--sidebar-->
                <!--    .ps-widget__header: h3 Ads Banner-->
                <!--    .ps-widget__content-->
                <!--        a(href='product-listing'): img(src="images/offer/sidebar.jpg" alt="")-->
                <!---->
                <!--aside.ps-widget--sidebar-->
                <!--    .ps-widget__header: h3 Best Seller-->
                <!--    .ps-widget__content-->
                <!--        - for (var i = 0; i < 3; i ++)-->
                <!--            .ps-shoe--sidebar-->
                <!--                .ps-shoe__thumbnail-->
                <!--                    a(href='#')-->
                <!--                    img(src="images/shoe/sidebar/"+(i+1)+".jpg" alt="")-->
                <!--                .ps-shoe__content-->
                <!--                    if i == 1-->
                <!--                        a(href='#').ps-shoe__title Nike Flight Bonafide-->
                <!--                    else if i == 2-->
                <!--                        a(href='#').ps-shoe__title Nike Sock Dart QS-->
                <!--                    else-->
                <!--                        a(href='#').ps-shoe__title Men's Sky-->
                <!--                    p <del> £253.00</del> £152.00-->
                <!--                    a(href='#').ps-btn PURCHASE-->
            </div>
        </div>
        <div class="ps-subscribe">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                        <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                        <form class="ps-subscribe__form" action="do_action" method="post">
                            <input class="form-control" type="text" placeholder="">
                            <button>Sign up now</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                        <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection