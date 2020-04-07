@extends('layouts.backend.app')

@section('title', 'Create Supplier')

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
                            <li class="breadcrumb-item active">Crear Proveedor</li>
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
                                <h3 class="card-title">Crear Proveedor</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.supplier.store') }}" method="post" enctype="multipart/form-data">
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
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select name="type" id="" class="form-control">
                                                    <option value="" disabled selected>Seleccionar Tipo</option>
                                                    <option value="1">Distribuidor</option>
                                                    <option value="2">Mayorista</option>
                                                    <option value="3">Minorista</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre de Tienda</label>
                                                <input type="text" class="form-control" name="shop_name" value="{{ old('shop_name') }}" placeholder="Ingresar Nombre de Tienda">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Imagen</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Seleccionar Archivo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Titular de la Cuenta</label>
                                                <input type="text" class="form-control" name="account_holder" value="{{ old('account_holder') }}" placeholder="Ingresar Titular de la Cuenta">
                                            </div>
                                            <div class="form-group">
                                                <label>Numero de Cuenta</label>
                                                <input type="text" class="form-control" name="account_number" value="{{ old('account_number') }}" placeholder="Ingresar Numero de Cuenta">
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre del Banco</label>
                                                <input type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}" placeholder="Ingresar Nombre del Banco">
                                            </div>
                                            <div class="form-group">
                                                <label>Sucursal Bancaria</label>
                                                <input type="text" class="form-control" name="bank_branch" value="{{ old('bank_branch') }}" placeholder="Ingresar Sucursal Bancaria">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Crear Proveedor</button>
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