<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')
</head>

<body>

    <body id="page-top">
        <header>
            @include('partials/header')
        </header>

        <div class="wrapper">
            <div id="social-countdown">
                @yield('social')
            </div>

            <main id="line-up-link">
                @yield('line-up')
            </main>

            <div id="ticket-link">
                @yield('ticket')
            </div>

            <div class="container-gallery">
                @yield('gallery')
            </div>

            <div id="partners-link">
                @yield('partners')
            </div>

            <footer id="footer">
                @include('partials/footer')
            </footer>
        </div>


    </body>
</body>

</html>