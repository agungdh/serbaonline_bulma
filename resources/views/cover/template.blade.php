<html  style="background-image: url('{{asset("/")}}storage/assets/images/wall.jpg');">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App Serba Online [dot] ID</title>
  <link rel="stylesheet" href="{{asset('')}}storage/bulma/css/bulma.min.css">
  <link rel="shortcut icon" href="{{asset('/')}}storage/assets/images/favicon.ico">    

  <script defer src="{{asset('')}}storage/bulma/js/all.js"></script>

</head>


<section class="hero is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
        {{ view('cover.menuatas') }}
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
      @yield('content')      
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot" style="background-color: #FAFAD2;color: red;">
    <div class="content has-text-centered">
      <p>
        Copyright (c) 2019-2024 by <a href="https://serbaonline.id">App SerbaOnline [dot] ID</a>
      </p>
    </div>
  </div>
</section>

</html>
