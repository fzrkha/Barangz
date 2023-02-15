<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Barbgus | {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <link href="{{ asset('css') }}/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <h1><i class="bi bi-database-fill"></i></h1>
    <h1 class="h3 mb-3 fw-normal">Login as Admin</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Alamat Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-warning" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>

@if(session()->has('success'))
  <script src="{{ asset('js') }}/script.js"></script>
@endif

@if(session()->has('loginError'))
  <script src="{{ asset('js') }}/scriptE.js"></script>
@endif


  </body>
</html>