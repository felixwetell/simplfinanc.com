<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Search Engine -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Finance, Save, Money, Save Money, Calculate, Acid Finance, Acid">
    <meta name="description" content="Acid Finance helps you by visualising your incomes and expenses, cut down unnecessary costs and save money">
    <meta name="subject" content="Finance">
    <meta name="image" content="https://acidfinance.com/img/acid-logo.png">
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="robots" content="index, follow">
    <meta name="Classification" content="Business">
    <meta name="author" content="felix made me, hello@felixmade.me">
    <meta name="designer" content="felix made me">
    <meta name="copyright" content="felix made me">
    <meta name="reply-to" content="hello@felixmade.me">
    <meta name="owner" content="felix made me">
    <meta name="url" content="http://www.acidfinance.com">
    <meta name="identifier-URL" content="http://www.acidfinance.com">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ Request::url() }}">
    <link rel="home" href="{{ Request::url() }}">
    <link rel="alternate" href="{{ Request::url() }}" hreflang="x-default">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Acid Finance">
    <meta itemprop="description" content="Acid Finance helps you by visualising your incomes and expenses, cut down unnecessary costs and save money">
    <meta itemprop="image" content="https://acidfinance.com/img/acid-logo.png">
    <!-- Twitter -->
    <meta name="twitter:card" content="Acid Finance helps you by visualising your incomes and expenses, cut down unnecessary costs and save money">
    <meta name="twitter:title" content="Acid Finance">
    <meta name="twitter:description" content="Acid Finance helps you by visualising your incomes and expenses, cut down unnecessary costs and save money">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Acid Finance">
    <meta name="og:description" content="Acid Finance helps you by visualising your incomes and expenses, cut down unnecessary costs and save money">
    <meta name="og:image" content="https://acidfinance.com/img/acid-logo.png">
    <meta name="og:url" content="https://acidfinance.com">
    <meta name="og:site_name" content="Acid Finance">
    <meta name="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="og:type" content="website">

    <title>{{ config('app.name', 'Acid Finance') }} - @yield( 'title' )</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">
    <link rel="icon" href="{{ asset( '/img/acid-icon.ico' ) }}">
    <script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
    <script>
        var galite = galite || {};
        galite.UA = 'UA-135535698-2';
    </script>
    <script defer src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>

    <script defer src="{{ asset( '/js/main.js' ) }}"></script>
    <script defer src="{{ asset( '/js/ajax.js' ) }}"></script>
    <script defer src="{{ asset( '/js/incomeAjax.js' ) }}"></script>
    <script defer src="{{ asset( '/js/expenseAjax.js' ) }}"></script>
    <script defer src="{{ asset( '/js/userAjax.js' ) }}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000"
        },
        "button": {
          "background": "#fff",
          "color": "#000 !important"
        }
      }
    })});
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <a class="navbar-brand" href="/">
        	<img src="{{ asset( '/img/acid-logo.svg' ) }}" alt="Acid Finance logo">
        </a>
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text">
                <i class="fa fa-bars fa-2x"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route( 'about' ) }}">What is {{ config('app.name', 'Acid Finance') }}?</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route( 'guide' ) }}">How to use</a>
				</li>
            </ul>
            <hr class="d-block d-md-none">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route( 'dashboard' ) }}">
                                {{ __( 'Dashboard' ) }}
                            </a>
                            <a class="dropdown-item" href="{{ route( 'profile' ) }}">
                                {{ __( 'Profile' ) }}
                            </a>
                            <a class="dropdown-item" href="{{ route( 'logout' ) }}"
                               onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                ">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route( 'logout' ) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <main>
        <div class="container mt-5 py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="text-center my-4">
                        <h1>@yield( 'title' )</h1>
                    </div>
                    <hr><br>
                    @yield( 'content' )
                    <br>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mb-3">
        <div class="container-fluid">
            <hr>
            <div class="row p-4">
                <div class="col-md-3 d-none d-md-block">
                    <img src="{{ asset( '/img/acid-logo.svg' ) }}" alt="Acid Finance logo">
                </div>
                <div class="col-md-3">
                    <h4>Acid Finance</h4>
                    <p>
                        Karlstad
                        <br>
                        Sweden
                        <br>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Useful Links</h4>
                    <p>
                        <a href="{{ route( 'about' ) }}">What is {{ config('app.name', 'Acid Finance') }}?</a>
                        <br>
                        <a href="{{ route( 'guide' ) }}">How to use</a>
                        <br>
                        <a href="{{ route( 'privacy' ) }}">Privacy Policy</a>
                        <br>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Contact</h4>
                    <p>
                        hello@felixmade.me
                    </p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <small>
                    by <a href="https://felixmade.me">felix made me</a>
                </small>
                <br>
                <small>
                    Copyright © {{ date( 'Y' ) }} Acid Finance
                </small>
            </div>
        </div>
    </footer>
</body>
</html>
