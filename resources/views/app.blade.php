<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
              <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                  <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                  </a>
                </div>

                <nav class="hidden space-x-10 md:flex">

                  <a href="{{route('user.index')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">All User</a>
                  <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Docs</a>

                </nav>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                  <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a>
                  <a href="#" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
                </div>
              </div>
            </div>
             @yield('content')
          </div>
    </body>
</html>
