@extends('burger_maker.burger_wrapper')
@section('contents')

    <!-- About Part Start  -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <h2>Menu List</h2>
            <br>
            <br>
            <div class="row">
                @foreach (\App\Models\FoodManu::select('id','title','thumb_image')->where('status',1)->get() as $item)
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
@endsection

