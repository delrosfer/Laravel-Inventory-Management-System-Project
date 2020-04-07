@extends('layouts.backend.app')

@section('title', 'Create Employee')

@push('css')

@endpush

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Alta de Empleados</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Crear Nuevo Empleado</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.employee.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingresar Nombre">
                                            </div>
                                            <div class="form-group">
                                                <label>Correo Electrónico</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingresar Correo Electrónico">
                                            </div>
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Ingresar Telefono">
                                            </div>
                                            <div class="form-group">
                                                <label>Domicilio</label>
                                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Ingresar Domicilio">
                                            </div>
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="Ingresar Ciudad">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Experiencia</label>
                                                <input type="text" class="form-control" name="experience" value="{{ old('experience') }}" placeholder="Ingresar Experiencia">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Foto</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Seleccionar Archivo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>IFE no.</label>
                                                <input type="text" class="form-control" name="nid_no" value="{{ old('nid_no') }}" placeholder="Ingresar IFE no.">
                                            </div>
                                            <div class="form-group">
                                                <label>Salario</label>
                                                <input type="text" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Ingresar Salario">
                                            </div>
                                            <div class="form-group">
                                                <label>Vacaciones</label>
                                                <input type="text" class="form-control" name="vacation" value="{{ old('vacation') }}" placeholder="Ingresar Vacaciones">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Crear Empleado</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@push('js')

@endpush