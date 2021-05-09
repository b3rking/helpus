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
<body>
    <header>
        <nav class="flex flex-row">
            <div class="logo">
                Helpus
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="route('')">link1</a></li>
                    <li><a href="">link2</a></li>
                    <li><a href="">link3</a></li>
                </ul>
            </div>
            <div class="user-box flex flex-row">
                <img src="{{ asset('images/pngtree-user-vector-avatar-png-image_1541962.jpg') }}" alt="user profile-image" class="rounded-full w-10 h-10 flex items-center justify-center">
                <p>Username</p>
                <a href="/logout">Se deconnecter</a>
            </div>
        </nav>
    </header>

    @yield('content')

    <div class="footer container mx-auto">
        <p class="text-center">Creer avec <i class="fas fa-heart"></i> par <a href="https://github.com/b3rking" target="_blank">b3rking</a> et Arsene, <span class="year"></span></p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
