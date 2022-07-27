<!DOCTYPE HTML>
<html lang="{{ str_replace ('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gubcanteen</title>
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Lato:wght@400;700;900&family=Pacifico&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Slab:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- All CSS Start -->
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/burger.css">
        <!-- All CSS End -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @stack('ccss')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        window.s_alert = (icon, title) => {
            Toast.fire({
                icon: icon,
                title: title,
            })
        }
        // window.s_alert = () => '';
    </script>
</head>

<body class="theme-light" data-highlight="highlight-red">

    <!-- topnavbar start     -->
    {{--
        <section id="topnav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="topnav_text_part text-left">
                            <h3>Green University of Bangladesh | Green Canteen </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto">
                        <div class="topnav_icon_part text-right">

                            <a href="#"><i class="fab fa-facebook "></i></a>
                            <a href="#"><i class="fab fa-twitter twt"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    --}}
    <!-- topnavbar end     -->

    <!-- navbar part start     -->

    <section id="menu_bar">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container">
                <div class="d-flex flex-wrap w-100">
                    <div class="left">
                        <a class="navbar-brand" href="/">
                            <img src="/logo.png" alt="logo.png" class="w-100 img-fluid">
                        </a>
                    </div>
                    <div class="right d-flex" style="flex:1; justify-content: flex-end; align-items: center">
                        <ul class="d-flex flex-wrap justify-content-end">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('menu')}}">MENU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">Cart List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/order-list">Order List</a>
                            </li>
                            <style>
                                .nav-link{
                                    font-weight: 600;
                                    color: black;
                                    transition-duration: .3s;
                                    text-transform: uppercase;
                                }
                                .nav-link:hover{
                                    color: green;
                                }
                                @media (max-width: 575px){
                                    nav .right{
                                        flex: unset!important;
                                        padding-top: 20px;
                                        width: 100% !important;
                                    }
                                }
                            </style>
                        </ul>
                    </div>
                </div>
            </div>

        </nav>
    </section>
    <!-- navbar part end     -->

    @yield('contents')

    <section id="footer">
        <div class="container">
            <div class="fotter_overly">
                <div class="row">
                    <!-- footer 1st Colom start -->
                    <div class="col-lg-3">
                        <div class="ftr_logo_item">
                            <a href="/"><img src="/logo.png" alt="logo.png"></a>
                        </div>
                        <div class="ftr_text_item">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i><span>Main Campus: </br> 220/D, Begum Rokeya
                                        Sarani (300 meter North Side of IDB Bhaban), Dhaka -1207, Bangladesh</span>
                                </li>

                                <li><i class="fas fa-phone"></i><span>Phone:9014725, 8031031, 8060116</span> </li>

                                <li><i class="fas fa-mobile-alt"></i><span>Cell:01757074304, 01757074302, 01757074303,
                                        01757074301</span> </li>

                                <li><i class="fas fa-envelope"></i><span>admission@green.edu.bd</span> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer 1st colom end  -->

                    <!-- footer 2nd colom Start  -->
                    <div class="col-lg-3">
                        <div class="ftr_opn_time">
                            <div class="opn_time_up_txt">
                                <h1>Our Opening Time</h1>
                            </div>
                            <div class="opn_time_dwn_txt">
                                <h3>Sunday-Wednesday</h3>
                                <p>10:00 <span>AM</span> - 8:00 <span>PM</span></p>
                            </div>
                            <hr>
                            <div class="opn_time_dwn_txt">
                                <h3>Saturday-Sunday</h3>
                                <p>10:00 <span>AM</span> - 8:00 <span>PM</span></p>
                            </div>
                            <hr>
                            <div class="opn_time_dwn_txt">
                                <h3>Friday</h3>
                                <p>08:00 <span>AM</span> - 7:30 <span>PM</span></p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- footer 2nd colom End  -->

                    <!-- footer 3rd colom Start  -->
                    <div class="col-lg-3">
                        <div class="ftr_menu_list">
                            <div class="ftr_menu_text">
                                <h1>Our Menus</h1>
                            </div>
                            <div class="menu_link_ftr">
                                <ul>
                                    @foreach (\App\Models\FoodManu::select('id','title','thumb_image')->where('status',1)->get() as $item)
                                        <li><a href="{{ route('create_menu',$item->id) }}">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- footer 3rd colom End  -->

                    <!-- footer 4th  colom Start  -->
                    <div class="col-lg-3">
                        <div class="ftr_last_item">
                            <div class="last_item_txt">
                                <h1>News Latter</h1>
                                <p>Don’t miss any updates all the astonishing offers we bring for you.</p>
                                {{-- <input type="email" name="email" id="" placeholder="Ex:gubcanteen@gmail.com"> --}}
                            </div>
                            {{-- <div class="ftr_subcribe_btn">
                                <a href="#">Subscibe</a>
                            </div> --}}
                        </div>
                    </div>
                    <!-- footer 4th  colom End  -->
                </div>
                <hr>
                <!-- copy Right part Start  -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cpyriht_text">
                            <p>© 2022 Restaura is powered by <a href="../index.html">GubCanteen</a> The property of
                                their owners.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 ml-auto px-0">
                        <div class="ftr_end_icon text-right">
                            <a href="https://green.edu.bd/" target="_blank"><i class="fab fa-chrome"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- copy Right part END  -->
            </div>
        </div>
    </section>

    <!-- Footer part End     -->

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <script src="/contents/website/scripts/jq.js"></script>
    <script src="{{ asset('contents/burger') }}/js/bootstrap.bundle.min.js"></script>
    @stack('cjs')
    <script src="{{ asset('contents/burger') }}/js/custom.js"></script>
    {{--  --}}

</body>
