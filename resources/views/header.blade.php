<style>
  .dn {
    font-style: normal;
font-weight: bold;
font-size: 15px;
line-height: 18px;
  };
  .nav-link {
    font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 20px;
  }

</style>
<nav class=" navbar navbar-expand-lg navbar-light ">
  <img src="{{ asset('img/logo.png') }}" alt="">
    <a class="navbar-brand dn" href="#">BookOfBooks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('app') }}">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Все авторы</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about')}}" tabindex="-1" aria-disabled="true">Все работы</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('add')}}" tabindex="-1" aria-disabled="true">Добавить работу</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('search')}}" tabindex="-1" aria-disabled="true">Поиск</a>
            </li>
        </ul>
        <ul class="navbar-nav md-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('autorization')}}" tabindex="-1" aria-disabled="true">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('registration')}}" tabindex="-1" aria-disabled="true">Регистрация</a>
            </li>
        </ul>

    </div>
</nav>
