@extends('admin.layouts.master')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Información de Perfil</h3>
                    <p class="text-subtitle text-muted">Aquí puedes ver y modificar tu información personal cuando lo
                        necesites</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="avatar avatar-2xl">
                                    <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('assets/compiled/jpg/1.jpg') }}"
                                        alt="Imagen de perfil">
                                </div>

                                <h3 class="mt-3">{{ Auth::user()->person->first_name }}</h3>
                                <p class="text-small">{{ Auth::user()->rol->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title">Actualizar Perfil</h4>
                        </div>
                        <div class="card-body">
                            {{-- Formulario para actualizacion de perfil --}}
                            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="file" id="image" name="image" class="filepond" accept="image/png, image/jpg, image/jpeg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="last_name0" class="form-label">Apellido Paterno</label>
                                            <input type="text" name="last_name0" id="last_name0" class="form-control"
                                                placeholder="Tu Apellido Paterno"
                                                value="{{ Auth::user()->person->last_name0 }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="last_name1" class="form-label">Apellido Materno</label>
                                            <input type="text" name="last_name1" id="last_name1" class="form-control"
                                                placeholder="Tu Apellido Materno"
                                                value="{{ Auth::user()->person->last_name1 }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="first_name" class="form-label">Nombre</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                placeholder="Tu Nombre" value="{{ Auth::user()->person->first_name }}"
                                                autocomplete="given-name" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mail_person" class="form-label">Correo Personal</label>
                                            <input type="text" name="mail_person" id="mail_person"
                                                class="form-control" placeholder="Tu Correo Personal"
                                                value="{{ Auth::user()->person->mail_person }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mail_work" class="form-label">Correo de Trabajo</label>
                                            <input type="text" name="mail_work" id="mail_work" class="form-control"
                                                placeholder="Tu Correo de Trabajo"
                                                value="{{ Auth::user()->person->mail_work }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="birthday" class="form-label">Fecha de Cumpleaños</label>
                                            <input type="date" name="birthday" id="birthday" class="form-control"
                                                placeholder="Tu Cumpleaños" value="{{ Auth::user()->person->birthday }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sex" class="form-label">Género</label>
                                            <select name="sex" id="sex" class="form-select"
                                                disabled="disabled">
                                                <option {{ Auth::user()->person->sex == 'M' ? 'selected' : '' }}
                                                    value="M">Masculino</option>
                                                <option {{ Auth::user()->person->sex == 'F' ? 'selected' : '' }}
                                                    value="F">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="civil" class="form-label">Estado Civil</label>
                                            <select name="civil" id="civil" class="form-select"
                                                disabled="disabled">
                                                <option {{ Auth::user()->person->civil == 'S' ? 'selected' : '' }}
                                                    value="S">Soltero</option>
                                                <option {{ Auth::user()->person->civil == 'C' ? 'selected' : '' }}
                                                    value="C">Casado</option>
                                                <option {{ Auth::user()->person->civil == 'V' ? 'selected' : '' }}
                                                    value="V">Viudo</option>
                                                <option {{ Auth::user()->person->civil == 'D' ? 'selected' : '' }}
                                                    value="D">Divorciado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="cellular" class="form-label">Celular</label>
                                            <input type="text" name="cellular" id="cellular" class="form-control"
                                                placeholder="Tu Celular" value="{{ Auth::user()->person->cellular }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Teléfono</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Tu Teléfono" value="{{ Auth::user()->person->phone }}"
                                                autocomplete="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="address" class="form-label">Dirección</label>
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Tu Dirección" value="{{ Auth::user()->person->address }}"
                                            autocomplete="street-address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title">Actualizar Contraseña</h4>
                        </div>
                        <div class="card-body">
                            {{-- Formulario para actualizar contraseña --}}
                            <form action="{{ route('admin.password.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                        <label for="current_password" class="form-label">Contraseña Actual</label>
                                        <input type="password" name="current_password" id="current_password"
                                            class="form-control" placeholder="Ingrese su contraseña actual">
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="form-label">Contraseña Nueva</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Ingrese su contraseña nueva">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation" class="form-label">Confirma su
                                            contraseña</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control" placeholder="Confirme su contraseña">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Actualizar contraseña</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/extensions/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
    <script src="{{asset('assets/extensions/filepond/filepond.js')}}"></script>
    <script src="{{asset('assets/static/js/pages/filepond.js')}}"></script>

    <script>
        FilePond.create(document.querySelector("#image"), {
            allowMultiple: false,
            acceptedFileTypes: ["image/png", "image/jpg", "image/jpeg"],
            labelIdle: 'Arrastra y suelta tu imagen',
            storeAsFile: true  // Hace que el archivo se envíe como un input normal
        });

        /* Quitar marca de agua */
        document.addEventListener("DOMContentLoaded", () => {
            const credits = document.querySelector(".filepond--credits");
            if (credits) credits.remove();
        });

    </script>
@endpush
