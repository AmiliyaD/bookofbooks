
<div class="row bg">
    <div class="col-9">
       @yield('main')

    </div>
</div>
{{-- p --}}
<div class="row">
    <div class="col-2">
        @yield('p')
    </div>
</div>
{{-- main-fanfic --}}
@yield('main-title')

<div class="row text-center">
    @yield('sov')
</div>
 
<div class="row text-center">
    <div class="col-12">@yield('button')</div>
    
</div>