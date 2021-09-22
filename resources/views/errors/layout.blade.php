<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          *{
            margin: 0;
            padding: 0;
            border: 0;
          },
          html, body {
              background-image: url('images/bg_404.jpg');
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 100;
              height: 100vh;
              margin: 0;
          }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                  <div class="bg-indigo-900 relative overflow-hidden h-screen">
                    <img src="/images/landscape/8.svg" class="absolute h-full w-full object-cover"/>
                    <div class="inset-0 bg-black opacity-25 absolute">
                    </div>
                    <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center py-32 xl:py-40">
                        <div class="w-full font-mono flex flex-col items-center relative z-10">
                            <h1 class="title font-extrabold text-5xl text-center text-white leading-tight mt-4">
                                You&#x27;re alone here
                            </h1>
                            <p class="font-extrabold text-8xl my-44 text-white animate-bounce">
                                404
                            </p>
                        </div>
                    </div>
                  </div>
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
