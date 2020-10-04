{{-- СТРАНИЦА ПОИСКА --}}
@extends('main-sh.app')
@section('title')
Поиск
@endsection
@section('add')
<div class="row">
    <div class="col-md-3">
        <h1>Поиск</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <input type="text" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="row ">
            <div class="col-2 ">
                <button class="btn btn-success">button</button>
            </div>
            <div class="col-2 ">
                <button class="btn btn-success">button</button>
            </div>
            <div class="w-100"></div>
            <div class="col-2">
                <button class="btn btn-success">button</button>
            </div>
            <div class="col-2">
                <button class="btn btn-success">button</button>
            </div>
            <div class="col-2">
                <button class="btn btn-success">button</button>
            </div>
            <div class="col-2">
                <button class="btn btn-success">button</button>
            </div>
            <div class="w-100"></div>
            <div class="col-5">
                <button class="btn btn-success">Сначала более популярные</button>
            </div>
            <div class="col-5">
                <button class="btn btn-success">Сначала менее популярные</button>
            </div>
            <div class="w-100"></div>
            <div class="col-3">
                <input type="date" name="" id="">
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-5 ">
        <button class="btn btn-success">Найти</button>
    </div>
</div>
{{-- СКРЫТАЯ ИНФА --}}
<div class="row">
    <div class="col-md-6">
        <h2>Результаты поиска:</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4  border">
        <p>Украденный свитер</p>
        <p>Миссис Салли, которая зарабатывала на жизнь, продавая свитеры ручной работы, в холодный ноябрьский вечер с
            ужасом обнаружила пропажу нового изделия - заказ самой королевы Великобритании! Обратившись к полиции,
            женщина не получила никакой помощи. Неудивительно, ведь кража произошла в запертой комнате! Справится ли с
            этой уму непостижимой задачей наш главный детектив?</p>
    </div>
    <div class="col-md-4 border"></div>
    <div class="col-md-4 border"></div>
</div>
@endsection
