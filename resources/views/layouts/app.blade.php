<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

        <!-- Icons -->
        <link rel="icon" href="{{ asset('assets/tailwind/img/ppmi.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/argon/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">

        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/argon/css/argon.css?v=1.1.0') }}" type="text/css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('layouts.sidebar')
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- topnav -->
            @include('layouts.navbar')
                <!-- Page Heading -->
                <div class="header bg-primary pb-6">
                    <div class="container-fluid">
                        <div class="header-body">
                            <div class="row align-items-center py-4">
                                <div class="col-lg-6 col-7">
                                    <h6 class="h2 text-white d-inline-block mb-0">{{ $title ?? '' }}</h6>
                                </div>
                                <div class="col-lg-6 col-5 text-right">
                                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                                            @if($breadcrumbs)
                                                @foreach ($breadcrumbs as $url => $name)
                                                    @if ($loop->last)
                                                        <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                                                    @endif
                                                    <li class="breadcrumb-item"><a href="{{ $url }}">{{ $name }}</a></li>
                                                @endforeach
                                            @endif
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            @isset($header)
                                {{ $header }}
                            @endisset
                        </div>
                    </div>
                </div>
                
                <!-- Page Content -->
                <div class="container-fluid mt--6">
                    {{ $slot }}
                </div>

            </div>
        </div>

        @stack('modals')
        <!-- Core -->
        <script src="{{ asset('assets/argon/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/argon/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('assets/argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="{{ asset('assets/argon/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/argon/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('assets/argon/js/argon.js?v=1.1.0') }}"></script>
        
        @livewireScripts
        <script src="{{ mix('js/app.js') }}" defer></script>
        @isset($script)
            {{ $script }}
        @endisset

    </body>
</html>
