<x-header/>

<div class="container">
@foreach ($application as $applications)
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Номер заявки:{{$applications->id}}</h5>
    <p class="card-text">Гражданин:{{$applications->user->name}} </p>
    <p class="card-text">Машина: {{$applications->car}} </p>
    <p class="card-text">Описание: {{$applications->description}}</p>
  
    @if ($applications->status == 1)
    <a href="/{{$applications->id}}/accepted" class="btn btn-primary">Принять</a>
    <a href="/{{$applications->id}}/reject" class="btn btn-primary">Отклонить</a>
    @else
    <p class="card-text">Статус: {{$applications->status_app->title}} </p>
    @endif
  </div>
</div>

@endforeach 

</div>