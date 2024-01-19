

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
<div> 
  <h1>Сортировка по новизне</h1>
  <a href="/personalcab?sort=desc">От новых к старым<a>
  <a href="/personalcab?">От старых к новым<a>
</div>
        @foreach ($application as $applications)
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Машина: {{$applications->car}}</h5>
    <p class="card-text"><span style="color:black;  " class="fw-bold">Нарушение:</span> {{$applications->description}}</p>
    <p class="card-text"><span style="color:black; font-weign:600;  " class="fw-bold">Статус: </span> {{ $applications->status_app->title }} </p>

  </div>
</div>

@endforeach
</div>
              {{ $application->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
        </div>

        
    </div>
</body>
</html>
