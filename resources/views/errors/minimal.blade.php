<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">


        <title>@yield('title')</title>

    </head>
    <body>
      <div class="bg-indigo-900 relative overflow-hidden h-screen">
        <img src="/images/landscape/bg_404.jpg" class="absolute h-full w-full object-cover"/>
        <div class="inset-0 bg-black opacity-25 absolute">
        </div>
        <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
            <div class="w-full font-mono flex flex-col items-center relative z-10">
                <h1 class="font-extrabold text-5xl text-center text-white leading-tight mt-4">
                  @yield('message')
                </h1>
                <p class="font-extrabold text-8xl my-44 text-white animate-bounce">
                  @yield('code')
                </p>
            </div>
        </div>
      </div>
    </body>
</html>
