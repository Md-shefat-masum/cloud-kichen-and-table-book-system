@extends('burger_maker.burger_wrapper')
@push('ccss')
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/slick.css">
@endpush
@section('contents')

    <!-- Banner Part Start -->
    <section id="banner">
        <div class="banner_overly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_part_item">
                            <div class="banner_text">
                                <h2 style="min-height: 52px;" class="typed"></h2>
                                <h3> Speciality Of Foods </h3>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis repudiandae
                                    quisquam ab rem obcaecati dolores est magnam, sapiente excepturi ipsum!</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="Banner_rsvtn">
                                        <a class="rsvtn_one" href="/reservation/reservation.html">Reservation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner Part end -->

    <!-- History part start -->
    <section id="history">
        <div class="history_overly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ">
                        <div class="histry_txt text-center">
                            <h2>Canteen History</h2>

                            <h3>Accumsan quis, vulputate sit amet sapien. Curabitur euismod vulputate nulla, non
                                fringilla neque condimentum placerat.Integer egestas ullamcorper purus.</h3>

                            <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu
                                ribero sit amet quam egestas semper. Aenean are ultricies mi vitae est tristique
                                senectus et netus et malesuada placerat leo.</p>

                            <a href="">Read More</a>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- History part End -->

    <!-- Short Menu Part Start -->
    <section id="offerslide">
        <div class="container">
            <div class="row offer_slick">
                <div class="col-lg-12">
                    <div class="offerslide_img">
                        <div class="img">
                            <img src="{{ asset('contents/burger') }}/images/offer-slide1.jpg" alt="">
                        </div>
                        <div class="offer_img_txt">
                            <h3> Corn Soup </h3>
                            <h4> 50% offer is ON </h4>
                            <div class="offer_img_icon">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i> offer for 2 days only</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer 2 days</li>
                                </ul>
                            </div>
                            <div class="offer_btn_slide">
                                <a href="">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="offerslide_img">
                        <div class="img">
                            <img src="{{ asset('contents/burger') }}/images/offer-slide2.jpg" alt="offer-slide2.jpg">
                        </div>
                        <div class="offer_img_txt">
                            <h3>Itlian Burger</h3>
                            <h4> Buy 1 Get 1 offer </h4>
                            <div class="offer_img_icon">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i> offer for 2 days only</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer 2 days</li>
                                </ul>
                            </div>
                            <div class="offer_btn_slide">
                                <a href="">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="offerslide_img">
                        <div class="img">
                            <img src="{{ asset('contents/burger') }}/images/offer-slide3.jpg" alt="offer-slide3.jpg">
                        </div>
                        <div class="offer_img_txt">
                            <h3>Subway Zone</h3>
                            <h4> 50% offer is ON </h4>
                            <div class="offer_img_icon">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i> offer for 2 days only</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer</li>
                                    <li><i class="fas fa-chevron-right"></i> Only Buy One Get One offer 2 days</li>
                                </ul>
                            </div>
                            <div class="offer_btn_slide">
                                <a href="">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </section>
    <!-- Short Menu Part END -->

    <!-- About Part Start  -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  ">
                    <div class="about_item">
                        <div class="about_icon text-center">
                            <img src="{{ asset('contents/burger') }}/images/about-icon2.png" alt="about-icon2.png">
                        </div>
                        <div class="about_txt text-center">
                            <h3>Delicious Food</h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="about_item">
                        <div class="about_icon text-center">
                            <img src="{{ asset('contents/burger') }}/images/about-icon4.png" alt="about-icon4.png">
                        </div>
                        <div class="about_txt text-center">
                            <h3>Professional Services </h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  ">
                    <div class="about_item">
                        <div class="about_icon text-center">
                            <img src="{{ asset('contents/burger') }}/images/about-icon6.png" alt="about-icon6.png">
                        </div>
                        <div class="about_txt text-center">
                            <h3>Excellent Menu </h3>
                            <p>Beetroot water spinach okra water chestnut ricebean pea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Part End  -->

    <!-- offer Part Start  -->
    <section id="offer">
        <div class="offer_overly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="offer_item">
                            <div class="offer_up_text">
                                <h2>Offerd Menu</h2>
                                <p>Some Trendy And Popular Courses Offerd</p>
                            </div>
                            <div class="kicuakta_btn">
                                <div class="offer_btn">
                                    <button type="button" class="control" data-filter="all">
                                        <h3>Specials</h3>
                                        <p>Fresh & Delicious</p>
                                    </button>
                                </div>
                                <div class="icon_down">
                                    <a href="#"><i class="fas fa-sort-down"></i></a>
                                </div>
                            </div>

                            <div class="kicuakta_btn">
                                <div class="offer_btn">
                                    <button type="button" class="control" data-filter=".breakfast">
                                        <h3>BreakFast</h3>
                                        <p>Fresh & Delicious</p>
                                    </button>
                                </div>
                                <div class="icon_down">
                                    <a href="#"><i class="fas fa-sort-down"></i></a>
                                </div>
                            </div>

                            <div class="kicuakta_btn">
                                <div class="offer_btn">
                                    <button type="button" class="control" data-filter=".lunch">
                                        <h3>Lunch</h3>
                                        <p>Fresh & Delicious</p>
                                    </button>
                                </div>
                                <div class="icon_down">
                                    <a href="#"><i class="fas fa-sort-down"></i></a>
                                </div>
                            </div>

                            <div class="kicuakta_btn">
                                <div class="offer_btn">
                                    <button type="button" class="control" data-filter=".snacks">
                                        <h3>Snacks</h3>
                                        <p>Fresh & Delicious</p>
                                    </button>
                                </div>
                                <div class="icon_down">
                                    <a href="#"><i class="fas fa-sort-down"></i></a>
                                </div>
                            </div>

                            <div class="kicuakta_btn">
                                <div class="offer_btn">
                                    <button type="button" class="control" data-filter=".dinner">
                                        <h3>Dinner</h3>
                                        <p>Fresh & Delicious</p>
                                    </button>
                                </div>
                                <div class="icon_down">
                                    <a href="#"><i class="fas fa-sort-down"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row controls">
                    <div class="col-lg-4 mix all">
                        <div class="offer_img_part ">
                            <img src="{{ asset('contents/burger') }}/images/menu1.jpg" alt="menu1.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_one">
                                <h3>Pizza</h3>
                                <p>Itialian Food</p>
                            </div>
                            <img src="{{ asset('contents/burger') }}/images/menu4.jpg" alt="menu4.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_two">
                                <h3>Stack</h3>
                                <p>American Food</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mix breakfast dinner snacks">
                        <div class="offer_img_part">
                            <img src="{{ asset('contents/burger') }}/images/menu2.jpg" alt="menu2.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_one">
                                <h3>Pizza</h3>
                                <p>Itialian Food</p>
                            </div>
                            <img src="{{ asset('contents/burger') }}/images/menu5.jpg" alt="menu5.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_two ">
                                <h3>Stack</h3>
                                <p>American Food</p>
                            </div>
                            <img src="{{ asset('contents/burger') }}/images/menu6.jpg" alt="menu6.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_two">
                                <h3>Stack</h3>
                                <p>American Food</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 mix lunch snacks dinner breakfast">
                        <div class="offer_img_part">
                            <img src="{{ asset('contents/burger') }}/images/menu1.jpg" alt="menu1.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_one">
                                <h3>Pizza</h3>
                                <p>Itialian Food</p>
                            </div>
                            <img src="{{ asset('contents/burger') }}/images/menu4.jpg" alt="menu4.jpg " class="w-100 img-fluid">
                            <div class="offer_img_text_up_two">
                                <h3>Stack</h3>
                                <p>American Food</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- offer Part End  -->

    <!-- reservation Part Start  -->
    <section id="reservation">
        <div class="rsvn_overly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rsvn_item">
                            <div class="rsvn_up_text text-center">
                                <h2>Book A Table</h2>
                                <h3>Some Trendy And Popular Courses Offerd</h3>
                                <p>MONDAY- FRIDAY: <span>08AM - 12PM</span> | SATURDAY - SUNDAY: <span>10AM -
                                        11PM</span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 text-right">
                        <div class="rsvn_form ">
                            <input type="text" placeholder=" Enter Your Name">
                            <input type="tel" placeholder=" Mobile Number">
                            <input class="tm" type="date" placeholder="  Date">
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="rsvn_form ">
                            <input type="text" placeholder=" Email Address">
                            <input type="tel" placeholder=" Number of Guest">
                            <input class="tm" type="time" placeholder=" Time">
                        </div>
                    </div>
                </div>
                <div class="submit_btn text-center">
                    <a href="">Submit</a>
                </div>
            </div>
        </div>
    </section>
    <!-- reservation Part End  -->

    <!-- client Review Part Start  -->
    <section id="review">
        <div class="review_overly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="review_up_text">
                            <h3> Our Clients Review </h3>
                            <p>Latest News Updates You Dont Miss Out!</p>
                        </div>
                    </div>
                </div>
                <div class="row review_slick">
                    <div class="col-lg-12 text-center">

                        <div class="review_down_txt">
                            <h2>This is the best canteen all of Canteen in the BD</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus perferendis <br>
                                eaque nisi laboriosam corrupti ad architecto modi repellat, </br> corporis voluptate,
                                maxime aspernatur est nulla dolore rerum quae molestias? Sunt, odit.</p>
                        </div>
                        <div class="review_img m-auto">
                            <img src="{{ asset('contents/burger') }}/images/author1.jpg" alt="author1.jpg">
                        </div>
                        <div class="img_dwn_txt">
                            <h3>Jhon Doe</h3>
                        </div>
                        <div class="review_rating_icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <!-- ----------------------------------------  -->

                    <div class="col-lg-12 text-center">

                        <div class="review_down_txt">
                            <h2>This is the best canteen all of Canteen in the BD</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus perferendis <br>
                                eaque nisi laboriosam corrupti ad architecto modi repellat, </br> corporis voluptate,
                                maxime aspernatur est nulla dolore rerum quae molestias? Sunt, odit.</p>
                        </div>
                        <div class="review_img m-auto">
                            <img src="{{ asset('contents/burger') }}/images/author1.jpg" alt="author1.jpg">
                        </div>
                        <div class="img_dwn_txt">
                            <h3>Jhon Doe</h3>
                        </div>
                        <div class="review_rating_icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <!-- ----------------------------------------  -->

                    <div class="col-lg-12 text-center">

                        <div class="review_down_txt">
                            <h2>This is the best canteen all of Canteen in the BD</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus perferendis <br>
                                eaque nisi laboriosam corrupti ad architecto modi repellat, </br> corporis voluptate,
                                maxime aspernatur est nulla dolore rerum quae molestias? Sunt, odit.</p>
                        </div>
                        <div class="review_img m-auto">
                            <img src="{{ asset('contents/burger') }}/images/author1.jpg" alt="author1.jpg">
                        </div>
                        <div class="img_dwn_txt">
                            <h3>Jhon Doe</h3>
                        </div>
                        <div class="review_rating_icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <!-- ----------------------------------------  -->
                </div>
            </div>
        </div>
    </section>
    <!-- client Review Part End  -->

    @push('cjs')
    <script src="{{ asset('contents/burger') }}/js/slick.min.js"></script>
    <script src="{{ asset('contents/burger') }}/js/typed.min.js"></script>
    <script src="{{ asset('contents/burger') }}/js/mixitup.min.js"></script>
    @endpush
@endsection

