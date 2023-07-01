<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('images/logo.jpg')}}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="{{ asset('css\app.css') }}" media="all" />
        <title>Career Assessment Test</title>
    </head>
    <body class="mb-48 {{request()->is('assessment-test/*') && !Auth::user()->finishedTest ? 'bg-white' : 'bg-[#e4ddd3]'}}">
        @auth
            <nav class="p-6 flex bg-white border-4 border-orange-700 ">
                <div class="flex items-center mr-6">
                    <img class="fill-current h-8 w-8 mr-2" width="54" height="54" src="{{asset('images/logo.jpg')}}" />
                    <span class="font-semibold text-xl tracking-tight">C.A.T</span>
                </div>

                <div class="flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="space-x-6 text-lg lg:flex-grow">
                        <a href="/" class="{{request()->is('') ? 'text-orange-700' : 'hover:text-orange-700'}}">
                            <i class="fa-solid fa-home"></i> Home
                        </a>

                        @cannot('is-user')
                            <a href="/user-setting" class="{{request()->is('user-setting') ? 'text-orange-700' : 'hover:text-orange-700'}}">
                                <i class="fa-solid fa-user-gear"></i> Setting {{Auth::user()->role == 'HRD' ? 'Kandidat' : 'User'}}
                            </a>
                        @else
                            <a href="/assessment-test/1" class="{{request()->is('assessment-test/*') ? 'text-orange-700' : 'hover:text-orange-700'}} {{Auth::user()->finishedTest == 1 ? 'cursor-not-allowed' : ''}}">
                                <i class="fa-solid fa-file-pen"></i> Assessment Test
                            </a>
                            <a href="{{route('result.show', Auth::id())}}" class="{{request()->is('users/result/*') ? 'text-orange-700' : 'hover:text-orange-700'}}">
                                <i class="fa-solid fa-folder"></i> Hasil Test
                            </a>
                            <a href="/contact" class="{{request()->is('contact') ? 'text-orange-700' : 'hover:text-orange-700'}}">
                                <i class="fa-solid fa-address-card"></i> Contact
                            </a>
                        @endcannot
                        
                    </div>
                </div>
                
                <div class="flex items-center">
                    <div class="mr-10">
                        <i class="fa-solid fa-user"></i> {{Auth::user()->role}}
                    </div>
                    <div>  
                        <a href="/logout" class="hover:text-orange-700">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </a>       
                    </div>             
                </div>

            </nav>
        @endauth
        <main>{{$slot}}</main>
        <x-flash-message />
    </body>
</html>