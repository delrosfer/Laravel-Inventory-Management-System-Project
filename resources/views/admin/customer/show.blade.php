@extends('layouts.backend.app')

@section('title', 'Show Customer')

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
                            <li class="breadcrumb-item active">Información del Cliente</li>
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
                                <h3 class="card-title">Datos del Cliente</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <p>{{ $customer->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Correo Electrónico</label>
                                                <p>{{ $customer->email }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <p>{{ $customer->phone }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Domicilio</label>
                                                <p>{{ $customer->address }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <p>{{ $customer->city }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre de Tienda</label>
                                                <p>{{ $customer->shop_name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Imagen</label>
                                                <p>
                                                    <img width="50" height="50" src="{{ URL::asset("storage/customer/".$customer->photo) }}" alt="{{ $customer->name }}">
                                                </p>

                                            </div>
                                            <div class="form-group">
                                                <label>Titular de la Cuenta</label>
                                                <p>{{ $customer->account_holder }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Numero de Cuenta</label>
                                                <p>{{ $customer->account_number }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre del Banco</label>
                                                <p>{{ $customer->bank_name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Sucursal Bancaria</label>
                                                <p>{{ $customer->bank_branch }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

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