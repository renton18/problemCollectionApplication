<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <!-- Flat-UI関連 -->
  <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
  <link href="css/flat-ui.css" rel="stylesheet"> 
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
          Top
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            {{--  <li class="nav-item">
              <a class="nav-link" href="">
                menu1
              </a>
            </li>  --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ route('practice.index') }}">
                問題集
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
      <!-- メインコンテンツ -->
      @yield('content')
  </div>
  <script src="/js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  @yield('script')
</body>
</html>