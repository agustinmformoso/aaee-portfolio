@include('admin.includes.header')

<div class="container-fluid vh-100 m-0 p-0 bg-dark">
    @include('admin.includes.nav')
    @yield('main-content')
</div>
@include('admin.includes.footer')