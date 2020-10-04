<link rel="stylesheet" href="{{ 'css/bg.css' }}">
{{-- выводим с главного шаблона --}}
@extends('main-sh.app')
{{-- основной контент главной страницы --}}
@section('title')
Главная
@endsection
@section('main')

<h1>Подари свой мир</h1>
<p class="h1p">Может, он кому-то понравится</p>
<a href='add' class="btn hb btn-success">Добавить работу</a>
@endsection

@section('p')
<h2>Новинки</h2>
@endsection

{{-- @section('name-fanfic')
    Украденный свитер
@endsection --}}


@section('main-title')

@foreach ($data as $d)

<div class="row">
    <div class="col-md-8 n padd border">
        <div class="row">

            <div class="col-md-6 offset-1">
            <a href="contact?id={{ $d->id }}"> <h4>{{$d->title}}</h4></a>  
            </div>
            <div class="col-md-1 img2">
            <img src="{{ 'img/i2.png' }}" alt="">
            <span>0</span>
            </div>
            <div class="col-md-1 img">


            <img src="{{ 'img/ы.png' }}" alt=""> <span>{{ $d->likes}}</span>
            </div>

            <div class="col-md-1">
            <span class="{{ $d->genre}}">{{ $d->genre}}</span>
            </div>
        </div>
        {{-- re --}}
        <div class="row">
            <div class="col-md-8 offset-1">
            <p class="namep">{{ $d->name }}</p>
            </div>
         
            
            <div class="col-1">
                <p>Завершен</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 offset-1">
                
                {{$d->created_at}}
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 offset-1">{{ $d->text }}
            </div>
        </div>
        <div class="col-md-3 offset-1">
    
</div>
    </div>
</div>



@endforeach


@endsection


@section('sov')
<div class="col-md-4 col-12 pm">

    <img src="{{ asset('img/img.png') }}" alt="">
    <div class="w-100"></div>
    Публикуй свои работы
</div>
<div class="col-md-4 col-12 pm">

    <img src="{{ asset('img/1 (2).png') }}" alt="">
    <div class="w-100"></div>
    Читай работы других авторов
</div>
<div class="col-md-4 col-12  pm">

    <img src="{{ asset('img/1 (3).png') }}" alt="">
    <div class="w-100"></div>
    Поддерживай авторов и
    оставляй комментарии
</div>
@endsection

@section('button')
<a href='about' class=" hb btn btn-success">Перейти ко всем работам</a>
@endsection
