@extends('pages.index')
@section('content')      
<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>CART  TOTALS</h2>
                    @foreach ($cardData as $card)
						@if ($card->idUser == Auth::user()->id && $card->conditionCard ==1 )
							@foreach ($bookData as $book)
							    @if ($book->id == $card->idBook)
                                    <div class="content">
                                        <ul>
                                            <li>Name Book <span>{{$book->nameBook}}</span></li>
                                            <li>Sub Total<span>${{$book->priceBook}} VND</span></li>
                                            <li>Amount<span>{{$card->amountCard}}</span></li>
                                            <li><b>Total</b><span>$<b>{{($card->amountCard * $book->priceBook)}}</b> VND</span></li>
                                            <li class="last"></li>
                                        </ul>
                                    </div>
                                
                                @endif												
							@endforeach
						@endif
					@endforeach
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>Total : $ <u>{{$sumPriceCard}}</u> VND</h2>
                        <h2>Payments</h2>
                        <div class="content">
                            <div class="checkbox">
                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>       
                            </div>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Payment Method Widget -->
                    <div class="single-widget payement">
                        <div class="content">
                            <img src="{{ asset("/viewhome/images/payment-method.png")}}" alt="#">
                        </div>
                    </div>
                    <!--/ End Payment Method Widget -->
                    <!-- Button Widget -->
                    <!--/ End Button Widget -->
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Make Your Checkout Here</h2>
                    <!-- Form --> 
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>Success!</strong> {{Session::get('success')}}
                        </div>
                    @endif 
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <strong>Error!</strong> {{Session::get('error')}}
                        </div> 
                    @endif
                    <form class="form" action="{{route('bookShop.postCheckout', $sumPriceCard)}}"  method="POST" enctype="multipart/form-data"">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Full Name<span>*</span></label>
                                    <input type="text" name="userName" placeholder="" value="{{Auth::user()->userName}}" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input type="email" name="email" placeholder="" value="{{Auth::user()->email}}" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="text" name="numberPhone" placeholder="" value="{{Auth::user()->numberPhone}}" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Detailed Address Of Receipt <span>*</span></label>
                                    <input type="text" name="address" placeholder="number of houses - village-commune-district - province/city - country" required="required">
                                </div>
                            </div>
                            <div  class="single-widget get-button col-lg-6 col-12">
                                <div class="content">
                                    <div class="button">
                                        <button type="submit" class="btn">Proceed to checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop