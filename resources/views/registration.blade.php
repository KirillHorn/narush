
  
    <x-header/>
    <div class="container">
    <form method="POST" action="/register_valid">
      @csrf
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Имя</label>
        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Фамилия</label>
        <input type="text" name="surname" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Отчество</label>
        <input type="text" name="patronymic" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Логин</label>
        <input type="text" name="login" class="form-control" id="exampleInputPassword1">
      </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Телефон</label>
          <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
      </form>


    </div>
</body>
</html>