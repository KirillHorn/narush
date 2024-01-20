<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>
    @auth
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/application" class="nav-link px-2 link-secondary">Подать заявку</a></li>
      <li><a href="#" class="nav-link px-2">Мои заявки</a></li>
    </ul>
    @endauth

    <div class="col-md-3 text-end flex">
        @guest
        <a href="/" class="btn btn-primary">Вход</a>
      <a href="/registration" class="btn btn-primary">Регистрация</a>
      @endguest
      @auth
      @if (Auth::user()->role == 1)
 
      <a href="/personalcab/" class="btn btn-primary">Личный кабинет</a>
      <a href="/signout" class="btn btn-primary">Выход</a>
      @else
      <a href="/admin/index" class="btn btn-primary">Админ панель</a>
      <a href="/signout" class="btn btn-primary">Выход</a>
      @endif

      @endauth
    </div>
  </header>
    </div>
