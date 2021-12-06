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

        <form action="{{ url('/actions/' . $user->id . '/update') }}" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Mensaje de bienvenida
                            </label>
                            <input id="welcome_greeting" type="text" name="welcome_greeting" class="form-control" value="{{ old('welcome_greeting', $user->welcome_greeting) }}">
                            @error('welcome_greeting')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Nombres
                            </label>
                            <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                            @error('name')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Título
                            </label>
                            <input id="title_job" type="text" name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                            @error('title_job')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Teléfono
                            </label>
                            <input id="tel" type="text" name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                            @error('tel')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Dirección
                            </label>
                            <input id="address" type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                            @error('address')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Resumen
                            </label>
                            <input id="excerpt" type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $user->excerpt) }}">
                            @error('excerpt')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>

                        <h4 class="text-center mt-1">Customizar Títulos</h4>

                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                About Me
                            </label>
                            <input id="about_me_title" type="text" name="about_me_title" class="form-control" value="{{ old('about_me_title', $user->about_me_title) }}">
                            @error('about_me_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                What I Do
                            </label>
                            <input id="what_i_do_title" type="text" name="what_i_do_title" class="form-control" value="{{ old('what_i_do_title', $user->what_i_do_title) }}">
                            @error('what_i_do_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Technical Skills
                            </label>
                            <input id="techical_skills_title" type="text" name="techical_skills_title" class="form-control" value="{{ old('techical_skills_title', $user->techical_skills_title) }}">
                            @error('techical_skills_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Professional Skills
                            </label>
                            <input id="professional_skills_title" type="text" name="professional_skills_title" class="form-control" value="{{ old('professional_skills_title', $user->professional_skills_title) }}">
                            @error('professional_skills_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Education
                            </label>
                            <input id="education_title" type="text" name="education_title" class="form-control" value="{{ old('education_title', $user->education_title) }}">
                            @error('education_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Work Experience
                            </label>
                            <input id="work_experience_title" type="text" name="work_experience_title" class="form-control" value="{{ old('work_experience_title', $user->work_experience_title) }}">
                            @error('work_experience_title')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <h5 class="text-white text-center">Foto de Perfil</h5>
                        <div class="col-md-12 my-2 d-flex flex-wrap flex-column justify-content-center align-items-center">
                            @if ($user->image)
                            <img class="img-fluid rounded mb-2" src="{{asset('storage/'.$user->image)}}" alt="{{ $user->name }}">
                            @else
                            <img class="img-fluid rounded mb-2" src="https://picsum.photos/400/200" alt="Card image cap">
                            @endif
                            <input type="file" name="file">
                            @error('file')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <h5 class="text-white text-center">Foto About Me</h5>
                        <div class="col-md-12 my-2 d-flex flex-wrap flex-column justify-content-center align-items-center">
                            @if ($user->about_me_image)
                            <img class="img-fluid rounded mb-2" src="{{asset('storage/'.$user->about_me_image)}}" alt="{{ $user->name }}">
                            @else
                            <img class="img-fluid rounded mb-2" src="https://picsum.photos/400/200" alt="Card image cap">
                            @endif
                            <input type="file" name="file_about">
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
                <button class="nav-link border bg-dark text-white" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Redes Sociales</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border bg-dark text-white" id="servicios-tab" data-bs-toggle="tab" data-bs-target="#servicios" type="button" role="tab" aria-controls="servicios" aria-selected="false">Servicios</button>
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
                            <h3 class="text-white text-center">Editar Habilidades</h3>
                            @include('user.includes.skills-edit')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade text-white" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4 class="text-center mt-1">Redes sociales</h4>

                @if ($user->rrss)
                <form action="{{ route('rrss.update', $user->rrss) }}" method="POST">
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Facebook
                            </label>
                            <input id="facebook_url" type="text" name="facebook_url" class="form-control" value="{{ old('facebook_url', $user->rrss->facebook_url) }}">
                            @error('facebook_url')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Twitter
                            </label>
                            <input id="twitter_url" type="text" name="twitter_url" class="form-control" value="{{ old('twitter_url', $user->rrss->twitter_url) }}">
                            @error('twitter_url')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="text-gray-700 text-sm font-bold mb-2">
                                Github
                            </label>
                            <input id="github_url" type="text" name="github_url" class="form-control" value="{{ old('github_url', $user->rrss->github_url) }}">
                            @error('github_url')
                            <div class="bg-danger w-100 p-3 text-white mt-2 rounded-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @csrf
                    @method('PUT')
                    <button class="bg-primary text-white btn btn-lg w-100 mt-2" type="submit" class="site-btn">Agregar</button>
                </form>
                @else
                <form action="{{ url('/rrss/create-rrss') }}" method="POST">
                    <h3 class="text-white text-center">Nueva Habilidad</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Facebook
                                </label>
                                <input id="facebook_url" type="text" name="facebook_url" class="form-control" placeholder="Facebook">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Twitter
                                </label>
                                <input id="twitter_url" type="text" name="twitter_url" class="form-control" placeholder="Twitter">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Github
                                </label>
                                <input id="github_url" type="text" name="github_url" class="form-control" placeholder="Github">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        @csrf
                        <div class="col-md-12">
                            <button class="bg-primary text-white btn btn-lg w-100 mt-2" type="submit" class="site-btn">Agregar</button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
            <div class="tab-pane fade text-white" id="servicios" role="tabpanel" aria-labelledby="servicios-tab">
                <h4 class="text-center mt-1">Servicios</h4>

                <h5 class="text-center mt-1">Agregar</h5>

                <form action="{{ url('/actions/create-service') }}" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Ícono
                                </label>
                                <select id="icon" name="icon" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="fa fa-bullseye purple-color">Bullseye Icon</option>
                                    <option value="fa fa-code iron-color">Code Icon</option>
                                    <option value="fa fa-object-ungroup sky-colorr">Object Ungroup Icon</option>
                                </select>
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Servicio
                                </label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Servicio">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Descripción
                                </label>
                                <input id="description" type="text" name="description" class="form-control" placeholder="Descripción">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            @csrf
                            <button class="bg-success text-white btn btn-lg w-100 " type="submit" class="site-btn">Agregar</button>
                        </div>
                    </div>
                </form>

                <h5 class="text-center mt-2">Editar</h5>

                @foreach ($user->service as $service)
                <form action="{{ route('service.update', $service) }}" method="POST">
                    <div class="row d-flex p-2">
                        <div class="col-4 d-flex">
                            <div class="w-100 text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Ícono
                                </label>
                                <select id="icon" name="icon" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="fa fa-bullseye purple-color">Bullseye Icon</option>
                                    <option value="fa fa-code iron-color">Code Icon</option>
                                    <option value="fa fa-object-ungroup sky-colorr">Object Ungroup Icon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 d-flex">
                            <div class="w-100 text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Servicio
                                </label>
                                <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}">
                            </div>
                        </div>
                        <div class="col-4 d-flex">
                            <div class="w-100 text-white">
                                <label class="text-gray-700 text-sm font-bold mb-2">
                                    Descripción
                                </label>
                                <input id="description" type="text" name="description" class="form-control" value="{{ old('description', $service->description) }}">
                            </div>
                        </div>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="col-12 d-flex justify-content-center align-items-end py-3">
                        <button class="bg-primary text-white btn btn-md w-50" type="submit" class="site-btn">Actualizar</button>
                    </div>
                </form>

                <form method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="col-12 d-flex justify-content-center align-items-end">
                        <button class="bg-danger text-white btn btn-md w-50" type="submit" class="site-btn">Eliminar</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection