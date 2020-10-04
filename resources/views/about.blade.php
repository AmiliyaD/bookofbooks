@extends('main-sh.app')
@section('title')
About
@endsection
@section('main')


@foreach ($data as $d)


<div class="row">
    <div class="col-md-9 n padd border">
        <div class="row">

            <div class="col-md-6 offset-1">
                <h4>{{$d->title}}</h4>
            </div>
            <div class="col-md-1 img">
                <img src="{{ 'img/i2.png' }}" alt="">
                <span>0</span>
            </div>
            <div class="col-md-1 img2">
                <img src="{{ 'img/ы.png' }}" alt="">
            <span>{{ $d->likes }}</span>
            </div>

            <div class="col-md-1">
            <span class="{{$d->genre }}">{{ $d->genre }}</span>
            </div>
        </div>
        {{-- re --}}
        <div class="row">
            <div class="col-md-3 offset-1">
                <p>{{ $d->name }}</p>
            </div>
            <div class="col-md-5">
                {{$d->created_at}}
            </div>
            <div class="col-1">
                <p>Завершен</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-10 offset-1">{{ $d->text }}
            </div>
        </div>


    </div>
</div>


@endforeach

@endsection
