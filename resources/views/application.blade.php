
  
    <x-header/>
    <div class="container">
    @if (session("error"))
    <div  id="message"  class="message">
    {{session("error")}}

    </div>
    @endif

    
    <form method="POST" action="{{Auth::id()}}/apllication_create">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Описание нарушения </label>
           <textarea class="form-control" name="description" value="" rows="8">
           </textarea>
          <p>@error('description') {{$message}}  @enderror</p>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Данные машины</label>
          <input type="text" name="car" class="form-control" id="exampleInputPassword1">
          <p>@error('password') {{$message}}  @enderror</p>
        </div>
        <button type="submit" class="btn btn-primary">Подать заявку</button>
      </form>


    </div>
</body>
</html>