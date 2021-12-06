@foreach ($user->skill as $skill)
<form action="{{ route('skill.update', $skill) }}" method="POST">
    <div class="row d-flex">
        <div class="col-12 d-flex justify-content-center">
            <div class="w-75 text-white">
                <label class="text-gray-700 text-sm font-bold mb-2">
                    Habilidades
                </label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $skill->name) }}">
            </div>
        </div>
    </div>
    @csrf
    @method('PUT')
    <div class="col-12 d-flex justify-content-center align-items-end py-3">
        <button class="bg-primary text-white btn btn-md w-50" type="submit" class="site-btn">Actualizar</button>
    </div>
</form>

<form action="{{ route('skill.destroy', $skill) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="col-12 d-flex justify-content-center align-items-end">
        <button class="bg-danger text-white btn btn-md w-50" type="submit" class="site-btn">Eliminar</button>
    </div>
</form>
@endforeach