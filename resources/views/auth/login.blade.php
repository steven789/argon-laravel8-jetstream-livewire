<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#000000" />

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

        <!-- style -->
        <link rel="icon" href="{{ asset('assets/tailwind/img/ppmi.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/tailwind/compiled-tailwind.min.css') }}" />
    </head>
    <body class="text-gray-800 antialiased">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <main>
            <section class="absolute w-full h-full">
                <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url( {{ asset('assets/tailwind/img/register_bg_2.png')}} ); background-size: 100%; background-repeat: no-repeat;"></div>
                <div class="container mx-auto px-4 h-full">
                    <div class="flex content-center items-center justify-center h-full">
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                                <div class="rounded-t mb-0 px-6 py-6">
                                    <div class="text-center mb-3">
                                        <h6 class="text-gray-600 text-sm font-bold">
                                        About Me
                                        </h6>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <button class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;">
                                            <img alt="..." class="w-5 mr-1" src=" {{ asset('assets/tailwind/img/ppmi.png') }}" />Ypp. Mamba'ul Ihsan
                                        </button>
                                    </div>
                                    <hr class="mt-6 border-b-1 border-gray-400" />
                                </div>
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                    <div class="text-gray-500 text-center mb-3 font-bold">
                                        <small>Sign in with credentials</small>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
                                            <input wire:model.lazy="email" type="email" name="email" value="{{ old('email') }}" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow is-invalid @error('email') is-invalid @enderror focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" required autofocus />
                                            @error('email')
                                                <span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-3">
                                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <div class="text-red-500 mb-3 font-bold">
                                                    <small>{{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password" >Password</label>
                                            <input type="password" name="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Password" style="transition: all 0.15s ease 0s;" required autocomplete="current-password" />
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input id="remember_me" type="checkbox" name="remember" class="form-checkbox text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;" />
                                                <span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span>
                                            </label>
                                            </div>
                                        <div class="text-center mt-6">
                                            <button type="submit" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="button" style="transition: all 0.15s ease 0s;">
                                                Sign In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex flex-wrap mt-6">
                                <div class="w-1/2">
                                    <a href="#pablo" class="text-gray-300"><small>Forgot password?</small></a>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="#pablo" class="text-gray-300"><small>Create new account</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
                    <div class="container mx-auto px-4">
                        <hr class="mb-6 border-b-1 border-gray-700" />
                        <div class="flex flex-wrap items-center md:justify-between justify-center">
                            <div class="w-full md:w-4/12 px-4">
                                <div class="text-sm text-white font-semibold py-1">
                                    Copyright © 2019
                                    <a href="https://www.creative-tim.com" class="text-white hover:text-gray-400 text-sm font-semibold py-1">Creative Tim</a>
                                </div>
                            </div>
                            <div class="w-full md:w-8/12 px-4">
                                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                                    <li>
                                        <a href="https://www.creative-tim.com" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">Creative Tim</a>
                                    </li>
                                    <li>
                                        <a href="https://www.creative-tim.com/presentation" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">About Us</a>
                                    </li>
                                    <li>
                                        <a href="http://blog.creative-tim.com" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">Blog</a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">MIT License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
        </main>
    </body>
</html>
