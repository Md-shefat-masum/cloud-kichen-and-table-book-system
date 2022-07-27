<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('contents/burger') }}/css/burger.css">
</head>

<body>
    <div id="backend_body">
        <header class="navbar navbar-dark bg-dark d-flex p-0 shadow">
            <div class="dashboard_logo">
                <a class="navbar-brand d-block mr-0 me-0" href="/dashboard">
                    <img src="/logo.png" alt="">
                </a>
                <button onclick="sidebarMenu.classList.toggle('show')" class="navbar-toggler d-md-none" type="button" >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    @auth
                        <a class="nav-link sign-out-btn px-3" onclick="confirm('logout!') && logout_form.submit()" href="#">Sign out</a>
                    @endauth
                </div>
            </div>
        </header>
        <div class="container-fluid">
            @yield('content')

        </div>
    </div>
    <form id="logout_form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <script src="/js/burger_maker_management.js"></script>
</body>

</html>
