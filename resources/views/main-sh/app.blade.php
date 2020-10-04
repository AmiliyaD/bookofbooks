<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <title> @yield('title') </title>
</head>
<body>
    <div class="container">
        <div class="row h">
            {{-- header --}}
            <div class="col-12">
            @include('header')
        </div>
        </div>
        {{-- main --}}
        @yield('add')
      @include('page-sh.fanfic')

    </div>

    <div class="c">
    @include('footer')
</div>
</body>
</html>