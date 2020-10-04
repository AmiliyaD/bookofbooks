@extends('main-sh.app');
@section('add')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <form>
                <h3>Вход в аккаунт</h3>
                <div class="form-group">
                  <label for="formGroupExampleInput">Введите логин</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Введите пароль</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <button class='btn btn-success' type="submit">Войти</button>
              </form>
        
        </div>

    </div>
</div>


@endsection