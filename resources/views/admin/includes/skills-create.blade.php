<form action="{{ route('skill.store') }}" method="POST">
    <div class="row d-flex">
        <div class="col-8 d-flex justify-content-center">
            <div class="w-75 text-white">
                <label class="text-gray-700 text-sm font-bold mb-2">
                    Nueva Habilidad
                </label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Nueva Habilidad">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>
        </div>
        @csrf
        <div class="col-4 d-flex justify-content-start align-items-end">
            <button class="bg-success text-white btn btn-lg w-50" type="submit" class="site-btn">Agregar</button>
        </div>
    </div>
</form>