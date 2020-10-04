@extends('main-sh.app');
@section('add')
    
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <form>
                <h3>Регстриация</h3>
                <div class="form-group">
                  <label for="formGroupExampleInput">Ваше имя</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Ваша фамилия</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Пароль</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                  </div>
                <button class='btn btn-success' type="submit">Войти</button>
              </form>
        
        </div>

    </div>
</div>
@endsection