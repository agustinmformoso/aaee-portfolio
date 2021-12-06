@include('user.includes.header')

<div class="container-fluid">
    <div class="row text-white vh-100">
        @include('user.includes.nav')
        @yield('main-content')
    </div>
</div>
@include('user.includes.footer')