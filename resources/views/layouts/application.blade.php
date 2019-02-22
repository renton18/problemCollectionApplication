<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="{{ url('/') }}/bootstrap.min.css" />
  <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
</head>

<body>
  <div id="app"> 
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/topmenu') }}">
          Top
        </a> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="">
                menu1
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/zaikos/update">
                menu2
              </a>
            </li>
          </ul>

          <ul class="navbar-nav">
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="row" id="content">
      <!-- メインコンテンツ -->
      @yield('content')
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>
</html>