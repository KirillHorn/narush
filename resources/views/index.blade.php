
  
    <x-header/>
    <div class="container">
    <form method="POST" action="/auth_valid">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Логин </label>
          <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
      </form>


    </div>
</body>
</html>