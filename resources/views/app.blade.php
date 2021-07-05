<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--


        b3rking -- https://github.com/b3rking

        ██████╗░██████╗░██████╗░██╗░░██╗██╗███╗░░██╗░██████╗░
        ██╔══██╗╚════██╗██╔══██╗██║░██╔╝██║████╗░██║██╔════╝░
        ██████╦╝░█████╔╝██████╔╝█████═╝░██║██╔██╗██║██║░░██╗░
        ██╔══██╗░╚═══██╗██╔══██╗██╔═██╗░██║██║╚████║██║░░╚██╗
        ██████╦╝██████╔╝██║░░██║██║░╚██╗██║██║░╚███║╚██████╔╝
        ╚═════╝░╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚═╝░░╚══╝░╚═════╝░


    -->

    <title>Helpus - @yield('title', 'home page')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicons/favicon.ico') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#047857">
    <script src="https://kit.fontawesome.com/29e3c799c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/inline/ckeditor.js"></script>
</head>
<body class="text-gray-700">
    <header>
        <nav class="flex flex-row bg-green-700 p-2 justify-center items-center text-white">
            <div class="logo-box flex flex-grow">
                <p class="font-bold text-2xl"><a href="{{ route('home') }}">Helpus</a></p>
            </div>
            <div class="nav-links ml-6 flex-grow">
                <ul>
                    <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('about') }}">A propos</a></li>
                    @auth
                        <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('dashboard') }}">Admin</a></li>
                    @endauth
                    @guest
                        <li class="inline-block link-padding p-1 rounded-lg hover:bg-green-800"><a href="{{ route('login') }}">se connecter</a></li>
                    @endguest

                </ul>
            </div>
            @auth
            <div class="user-box flex flex-row items-center">
                <img src="{{ asset('images/pngtree-user-vector-avatar-png-image_1541962.jpg') }}" alt="user profile-image" class="rounded-full w-10 h-10 flex items-center justify-center">
                <div class="flex flex-col px-3">
                    <p class="font-medium capitalize">{{ $user->username }}</p>
                    <a href="/logout">Se deconnecter</a>
                </div>
            </div>
            @endauth
        </nav>
    </header>

    <!-- the actual content -->
    <section>
        @yield('content')
    </section>
    <!-- end of the content -->

    <div class="footer m-10 container mx-auto">
        <p class="text-center">Developé avec <i class="fas fa-heart text-red-600 animate-bounce"></i> par <a href="https://github.com/b3rking" target="_blank" class="text-blue-900">b3rking</a> <span class="year"></span></p>
    </div>
    <script>
        InlineEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
