@extends('admin.layouts.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Información de Perfil</h3>
                <p class="text-subtitle text-muted">Aquí puedes ver y modificar tu información personal cuando lo necesites</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
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
                                <img src="{{asset('assets/compiled/jpg/1.jpg')}}" alt="Avatar">
                            </div>

                            <h3 class="mt-3">{{Auth::user()->person->first_name}}</h3>
                            <p class="text-small">{{Auth::user()->rol->name}}</p>
                            <p class="text-small">{{Auth::user()->person->numdoc}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.profile.update')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="last_name0" class="form-label">Apellido Paterno</label>
                                        <input type="text" name="last_name0" id="last_name0" class="form-control"
                                            placeholder="Tu Apellido Paterno" value="{{Auth::user()->person->last_name0}}" disabled>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="last_name1" class="form-label">Apellido Materno</label>
                                        <input type="text" name="last_name1" id="last_name1" class="form-control"
                                            placeholder="Tu Apellido Materno" value="{{Auth::user()->person->last_name1}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="first_name" class="form-label">Nombre</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            placeholder="Tu Nombre" value="{{Auth::user()->person->first_name}}" autocomplete="given-name" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="mail_person" class="form-label">Correo Personal</label>
                                        <input type="text" name="mail_person" id="mail_person" class="form-control"
                                            placeholder="Tu Correo Personal" value="{{Auth::user()->person->mail_person}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="mail_work" class="form-label">Correo de Trabajo</label>
                                        <input type="text" name="mail_work" id="mail_work" class="form-control"
                                            placeholder="Tu Correo de Trabajo" value="{{Auth::user()->person->mail_work}}">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="cellular" class="form-label">Celular</label>
                                        <input type="text" name="cellular" id="cellular" class="form-control"
                                            placeholder="Tu Celular" value="{{Auth::user()->person->cellular}}">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="birthday" class="form-label">Fecha de Cumpleaños</label>
                                        <input type="date" name="birthday" id="birthday" class="form-control"
                                            placeholder="Tu Cumpleaños" value="{{Auth::user()->person->birthday}}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="sex" class="form-label">Género</label>
                                        <select name="sex" id="sex" class="form-select">
                                            <option {{Auth::user()->person->sex == 'M' ? 'selected' : ''}} value="M">Masculino</option>
                                            <option {{Auth::user()->person->sex == 'F' ? 'selected' : ''}} value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="civil" class="form-label">Estado Civil</label>
                                        <select name="civil" id="civil" class="form-select">
                                            <option {{Auth::user()->person->civil == 'S' ? 'selected' : ''}} value="S">Soltero</option>
                                            <option {{Auth::user()->person->civil == 'C' ? 'selected' : ''}} value="C">Casado</option>
                                            <option {{Auth::user()->person->civil == 'V' ? 'selected' : ''}} value="V">Viudo</option>
                                            <option {{Auth::user()->person->civil == 'D' ? 'selected' : ''}} value="D">Divorciado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="address" class="form-label">Dirección</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Tu Dirección" value="{{Auth::user()->person->address}}" autocomplete="street-address">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection