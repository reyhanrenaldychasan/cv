<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reyhan R.C.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
<style>
  body {
    font-family: 'Montserrat', 'sans-serif';
    color: hsl(0, 0%, 93%);
    background-color: hsl(206, 21%, 23%);
    width: 100%;
    height: 100vh;
  }

  nav {
    transition: .6s;
  }

  nav.sticky, nav.show-collapse {
    background-color: hsl(206, 21%, 13%)
  }

  .main {
    padding-top: 80px;
    padding-bottom: 60px;
    /* height: 100%; */
  }
</style>

@stack('css-plugins')
@stack('css-scripts')
  </head>
  
  <body>
    
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ setActive(['home']) }}">
              <a class="nav-link" href="{{ route('home') }}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ setActive(['about']) }}"">
              <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
            </li>
            <li class="nav-item {{ setActive(['resume']) }}">
              <a class="nav-link" href="{{ route('resume') }}">RESUME</a>
            </li>
            <li class="nav-item {{ setActive(['portofolio']) }}">
              <a class="nav-link" href="{{ route('portofolio') }}">PORTOFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>

      @yield('overlay')
      <div class="main">
        @yield('content')
      </div>
      
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/43977969d0.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    window.addEventListener('scroll', function() {
      var header= document.querySelector('nav');
      header.classList.toggle('sticky', window.scrollY > 0 );
    })

    $(".navbar-toggler").click(function () {
      $("nav").toggleClass("show-collapse");
    })
  </script>
</html>