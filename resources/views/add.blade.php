@extends('main-sh.app')

@section('title')
Добавить

@endsection

@section('add')
<div class="row a">
    <div class="col-5">
        <h1>Добавить фанфик</h1>
        {{-- проверка на заполнение --}}
        @if ($errors->any()) 
        <div class="alert alert-danger">
            @foreach ($errors->all() as $er)
        <li>{{ $er }}</li>
            @endforeach
        </div> 
        @endif
{{--  форма для отправки на сервер --}}
        <form action="add/check" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" name="name" id="name" class="form-control">
                
                <label for="name">Название</label>
                <input type="text" name="title" id="name" class="form-control">
                <label for="name">Выберите жанр</label>
                <select id="" name='genre'>
                    <option value="Фэнтези" >Фэнтэзи</option>
                    <option value="Детектив">Дететкив</option>
                    <option value="Ужасы">Ужасы</option>
                    <option value="Романтика">Романтика</option>
                    <option value="Приключения">Приключения</option>
                    <option value="Другое">Другое</option>
                </select>
                <div class="w-100"></div>
                <label for="exampleFormControlTextarea1">Ваш текст</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>

                <button type='submit' class="btn btn-success">Отправить</button>
            </div>
        </form>
    </div>
</div>

@endsection
