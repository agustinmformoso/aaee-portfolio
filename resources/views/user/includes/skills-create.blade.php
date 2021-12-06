<form action="{{ url('/actions/create-skill') }}" method="POST">
    <h3 class="text-white text-center">Nueva Habilidad</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="text-white">
                <label class="text-gray-700 text-sm font-bold mb-2">
                    Skill
                </label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Skill">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-white">
                <label class="text-gray-700 text-sm font-bold mb-2">
                    Porcentaje
                </label>
                <input id="percent" type="text" name="percent" class="form-control" placeholder="Porcentaje">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>
        </div>
        <div class="col-md-4 mt-auto">
            @csrf
            <button class="bg-success text-white btn btn-lg w-100 " type="submit" class="site-btn">Agregar</button>
        </div>
    </div>
</form>