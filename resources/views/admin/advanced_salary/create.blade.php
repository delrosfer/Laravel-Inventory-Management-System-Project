@extends('layouts.backend.app')

@section('title', 'Create Advanced Salary')

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
                            <li class="breadcrumb-item active">Crear Salario Anticipado</li>
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
                                <h3 class="card-title">Crear Salario Anticipado</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.advanced_salary.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nombre Empleado</label>
                                                <select name="employee_id" class="form-control">
                                                    <option value="" disabled selected>Seleccionar un Empleado</option>
                                                    @foreach($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Mes</label>
                                                <select name="month" class="form-control">
                                                    <option value="" selected disabled>Selecciona un mes</option>
                                                    <option value="january">Enero</option>
                                                    <option value="february">Febrero</option>
                                                    <option value="march">Marzo</option>
                                                    <option value="april">Abril</option>
                                                    <option value="may">Mayo</option>
                                                    <option value="june">Junio</option>
                                                    <option value="july">Julio</option>
                                                    <option value="august">Agosto</option>
                                                    <option value="september">Septiembre</option>
                                                    <option value="october">Octubre</option>
                                                    <option value="november">Noviembre</option>
                                                    <option value="december">Diciembre</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Año</label>
                                                <input type="text" class="form-control" name="year" value="{{ old('year') }}" placeholder="Ingresar Año">
                                            </div>
                                            <div class="form-group">
                                                <label>Salario Adelantado</label>
                                                <input type="text" class="form-control" name="advanced_salary" value="{{ old('advanced_salary') }}" placeholder="Ingresar Salario adelantado">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Crear Salario Adelantado</button>
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