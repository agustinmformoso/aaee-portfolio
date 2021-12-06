@extends('user.layouts.user')

@section('main-content')
<div class="col-12 bg-dark text-white">
    <h2 class="text-center text-uppercase py-2">Editar Mi Portfolio</h2>

    <div class="p-4">
        @if (session('succes'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
        @endif
        <form enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Nombres
                            </label>
                            <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                            @error('name')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Título
                            </label>
                            <input id="title_job" type="text" name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                            @error('title_job')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Teléfono
                            </label>
                            <input id="tel" type="text" name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                            @error('tel')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Dirección
                            </label>
                            <input id="address" type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                            @error('address')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 my-2 d-flex flex-wrap flex-column justify-content-center align-items-center">
                            @if ($user->image)
                            <img class="img-fluid rounded mb-2" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                            @else
                            <img class="img-fluid rounded mb-2" src="https://picsum.photos/400/200" alt="Card image cap">
                            @endif
                            <input type="file" name="file">
                            @error('file')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            @csrf
            @method('PUT')

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-block btn-primary site-btn w-50 mt-2 m-auto">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>

<section class="container-fluid p-4 bg-dark">
    <div class="col-12">
        <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link border bg-dark text-white active" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="true">Skills</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border bg-dark text-white" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border bg-dark text-white" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
            </li>
        </ul>
        <div class="tab-content border border-top-0 rounded-bottom border-white p-4" id="myTabContent">
            <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="btn btn-block btn-primary active mb-4" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Habilidad</button>
                        <button class="btn btn-block btn-primary " id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar Habilidades</button>
                    </div>
                    <div class="tab-content w-100" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                            @include('user.includes.skills-create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">
                            @include('user.includes.skills-edit')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
    </div>
</section>

@endsection