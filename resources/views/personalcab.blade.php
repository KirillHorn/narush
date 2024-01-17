
  
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
        <div>

        @foreach ($application as $applications)
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Машина: {{$applications->car}}</h5>
    <p class="card-text"><span style="color:black;  ">Нарушение:</span> {{$applications->description}}</p>

  </div>
</div>

@endforeach 
        </div>
    </div>
</body>
</html>