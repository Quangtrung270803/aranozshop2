@extends('Layout_user')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Single</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================End Home Banner Area =================-->
    <!--================Single Product Area =================-->
    <div class="product_image_area section_padding">
        <div class="container">
            <div class="row s_product_inner justify-content-between">
                <div class="col-lg-7 col-xl-7">
                    <div class="product_slider_img">
                        <div id="vertical">

                            <div data-thumb="{{ asset('uploads/product/'.$product->product_image) }}">
                                <img src="{{ asset('uploads/product/'.$product->product_image) }}" />
                            </div>
                            @if (count($product->pro_gall) > 0)
                                @foreach ($product->pro_gall as $gall)
                                <div data-thumb="{{ asset('uploads/gallery/'.$gall->gallery_image) }}">
                                    <img src="{{ asset('uploads/gallery/'.$gall->gallery_image) }}" />
                                </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <h5>previous <span>|</span> next</h5>
                        <h3>{{ ucfirst($product->product_name) }}</h3>
                        <h2>{{ number_format($product->product_price) }}</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="{{ route('home.detail',$product->pro_cate->category_slug) }}">
                                    <span>Category</span> : {{ ucfirst($product->pro_cate->category_name) }}</a>
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> :
                                    {{ $product->product_qty > 0 ? 'In Stock' : 'Out Stock' }}</a>
                            </li>
                        </ul>
                        <p>
                            First replenish living. Creepeth image image. Creeping can't, won't called.
                            Two fruitful let days signs sea together all land fly subdue
                        </p>
                        <div class="card_area d-flex justify-content-between align-items-center">
                            <div class="product_count">
                                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                                <input readonly class="input-number hidden_proid{{ $product->product_id }}" type="text" value="1" min="1" max="{{ $product->product_qty }}">
                                <span class="number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <a href="#" class="btn_3 add_cart" id="{{ $product->product_id }}">add to cart</a>
                            <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>
                        {!! $product->product_desc !!}
                    </p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="comment_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-1.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                            <a class="reply_btn" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item reply">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-2.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                            <a class="reply_btn" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-3.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <h5>12th Feb, 2017 at 05:56 pm</h5>
                                            <a class="reply_btn" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Post a comment</h4>
                                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                                    novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your Full name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number" name="number"
                                                placeholder="Phone Number" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn_3">
                                            Submit Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        <h4>4.0</h4>
                                        <h6>(03 Reviews)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on 3 Reviews</h3>
                                        <ul class="list">
                                            <li>
                                                <a href="#">5 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">4 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">3 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">2 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                            <li>
                                                <a href="#">1 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-1.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-2.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/single-product/review-3.png" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Add a Review</h4>
                                <p>Your Rating:</p>
                                <ul class="list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>Outstanding</p>
                                <form class="row contact_form" action="contact_process.php" method="post"
                                    novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Full name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="number"
                                                placeholder="Phone Number" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="1" placeholder="Review"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn_3">
                                            Submit Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->

    <!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($product_sellers as $product)
                        <div class="single_product_item">
                            <a href="{{ route('home.detail',$product->product_slug) }}">
                                <img src="{{ asset('uploads/product/'.$product->product_image) }}" alt="">
                            </a>
                            <div class="single_product_text">
                                <a href="{{ route('home.detail',$product->product_slug) }}">
                                    <h4>{{ ucfirst($product->product_name) }}</h4>
                                </a>
                                <h3>{{ number_format($product->product_price) }}<sup class="price-agin">₫</sup></h3>
                                <a href="#" class="add_cart" id="{{ $product->product_id }}">+ add to cart</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->
@endsection
@section('js')
    <script src="{{ asset('frontend/js/swiper.jquery.js') }}"></script>

    <script src="{{ asset('frontend/js/stellar.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>

@stop
