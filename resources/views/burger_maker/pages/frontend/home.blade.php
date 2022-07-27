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
                                <div class="col-md-6">
                                    <p class="p-0"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis repudiandae
                                        quisquam ab rem obcaecati dolores est magnam, sapiente excepturi ipsum!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="Banner_rsvtn">
                                        <a class="rsvtn_one" href="#">Reservation</a>
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


    <!-- About Part Start  -->
    <section id="about">
        <div class="container">
            <div class="row">
                @foreach (\App\Models\FoodManu::select('id','title','thumb_image')->get() as $item)
                    <div class="col-lg-4 mb-4">
                        <div class="about_item">
                            <div class="about_icon text-center">
                                <img class="w-100" src="{{$item->thumb_image}}" alt="about-icon2.png">
                            </div>
                            <div class="about_txt text-center">
                                <h3>{{ $item->title }}</h3>
                                <div class="offer_btn_slide">
                                    <a class="mx-0" href="{{ route('create_menu',$item->id) }}">Create Order</a>
                                </div>
                                {{-- <p>Beetroot water spinach okra water chestnut ricebean pea.</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About Part End  -->


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

