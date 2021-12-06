@include('user.includes.header')

<div class="container-fluid vh-100 m-0 p-0 bg-dark">
    @include('user.includes.nav')
    @yield('main-content')
</div>
@include('user.includes.footer')