@include('user.includes.header')

<div class="container-fluid">
    <div class="row">
        @include('user.includes.nav')
        @yield('main-content')

    </div>
</div>
@include('user.includes.footer')