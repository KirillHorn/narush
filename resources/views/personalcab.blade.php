
  
    <x-header/>
    <div class="container">
    <div>ДОБРО ПОЖАЛОВАТЬ В ЛИЧНЫЙ КАБИНЕТ</div>
    <div>
      <span>{{Auth::user()->name}}</span>
      <span>{{Auth::user()->surname}}</span>
      <span>{{Auth::user()->patronymic}}</span>
      <span>{{Auth::user()->phone}}</span>
      <span>{{Auth::user()->email}}</span>
    </div>

    </div>
</body>
</html>