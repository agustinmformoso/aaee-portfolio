@extends('admin.layouts.admin')

@section('main-content')
<div class="row m-0 d-flex justify-content-center">
    <h2 class="text-center text-uppercase py-2 text-white">Editar Usuarios</h2>

    @foreach ($users as $user)
    <div class="card m-2 bg-dark text-white border-white m-0 p-0" style="width: 18rem;">
        @if ($user->image)
        <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
        @else
        <img class="card-img-top img-fluid" src="https://picsum.photos/400/200" alt="Card image cap">
        @endif
        <div class="card-body p-0 text-center p-1 d-flex flex-column justify-content-between">
            <div class="mt-2">
                <h5 class="card-title">{{ $user->uppercase }}</h5>
                <p class="card-text">{{ $user->title_job }}</p>
            </div>
            <form action="{{ route('user.destroy', $user) }}" class="py-2" method="POST">
                <a href="{{ route('user.edit', $user) }}" class="btn btn-primary p-2 rounded">Editar</a>
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar" class="btn btn-danger p-2 rounded" onclick="return confirm('¿Delea eliminar este usuario...?')" />
            </form>
        </div>
    </div>

    @endforeach
</div>
@endsection