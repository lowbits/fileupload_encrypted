<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">
</head>
<body>
    <div id="app">
        <nav class="navbar is-transparent">
            <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('css/img/dievisionaere.png') }}" alt="CAND Vision Logo" width="224" height="56">
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-lg fa-github"></i>
      </span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
                </a>

                <div class="navbar-burger burger" data-target="navMenuTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenuTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link  is-active">
                            Dateien
                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item " href="/upload">
                                Datei hochladen
                            </a>
                            <a class="navbar-item " href="https://bulma.io/documentation/modifiers/syntax/">
                                Modifiers
                            </a>
                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                <div>
                                    <p class="is-size-6-desktop">
                                        <strong>0.6.0</strong>
                                    </p>

                                    <small>
                                        <a class="bd-view-all-versions" href="https://versions.bulma.io/">View all versions</a>
                                    </small>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="navbar-end">

                    </a>
                    <div class="navbar-item">
                        <div class="field is-grouped">

                            <p class="control">
                                <a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.6.0/bulma-0.6.0.zip">
              <span class="icon">
                <i class="fa fa-download"></i>
              </span>
                                    <span>Download</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
