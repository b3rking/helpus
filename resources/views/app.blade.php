<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Helpus - @yield('title', 'home page')</title>
    <script src="https://kit.fontawesome.com/29e3c799c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-700 overflow-hidden">
    <header>
        <nav class="flex flex-row bg-green-700 p-2 justify-center items-center text-white">
            <div class="logo-box flex flex-grow">
                <p class="font-bold text-2xl"><a href="{{ route('home') }}">Helpus</a></p>
            </div>
            <div class="nav-links ml-6 flex-grow sm:hidden">
                <ul>
                    <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('home') }}">Home</a></li>
                    <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('home') }}">About</a></li>
                    @auth
                        <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('home') }}">Admin</a></li>
                    @endauth
                    @guest
                        <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('login') }}">Login</a></li>
                    @endguest

                </ul>
            </div>
            <div class="user-box flex flex-row items-center">
                <img src="{{ asset('images/pngtree-user-vector-avatar-png-image_1541962.jpg') }}" alt="user profile-image" class="rounded-full w-10 h-10 flex items-center justify-center">
                <div class="flex flex-col px-3">
                    <p class="font-medium capitalize">Username</p>
                    <a href="/logout">Se deconnecter</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- the actual content -->
    <section>
        @yield('content')
    </section>
    <!-- end of the content -->

    <div class="footer m-10 container mx-auto">
        <p class="text-center">Creer avec <i class="fas fa-heart text-red-600 animate-bounce"></i> par <a href="https://github.com/b3rking" target="_blank">b3rking</a> et Arsene, <span class="year"></span></p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
