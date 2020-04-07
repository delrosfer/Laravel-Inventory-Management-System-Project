@extends('layouts.backend.app')

@section('title', 'Add Product')

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
                            <li class="breadcrumb-item active">Agregar Producto</li>
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
                                <h3 class="card-title">Agregar Producto</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingresar Descripcion">
                                            </div>
                                            <div class="form-group">
                                                <label>Categoria del Producto</label>
                                                <select name="category_id" class="form-control">
                                                    <option value="" disabled selected>Seleccione una categoria</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Proveedor</label>
                                                <select name="supplier_id" class="form-control">
                                                    <option value="" disabled selected>Selecciona un Proveedor</option>
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Código de Producto</label>
                                                <input type="text" class="form-control" name="code" value="{{ old('code') }}" placeholder="Enter Product Code">
                                            </div>
                                            <div class="form-group">
                                                <label>Almacén</label>
                                                <select name="garage" class="form-control">
                                                    <option value="" disabled selected>Seleciona un Almacen</option>
                                                    <option value="A">Almacen A</option>
                                                    <option value="B">Almacen B</option>
                                                    <option value="C">Almacen C</option>
                                                    <option value="D">Almacen D</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Ubicacion</label>
                                                <select name="route" class="form-control">
                                                    <option value="" disabled selected>Selecciona una ubicacion</option>
                                                    <option value="A">Ubicacion A</option>
                                                    <option value="B">Ubicacion B</option>
                                                    <option value="C">Ubicacion C</option>
                                                    <option value="D">Ubicacion D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Imagen del Producto</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Elige un Archivo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha de Compra</label>
                                                <input type="date" class="form-control" name="buying_date" value="{{ old('buying_date') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha de Caducidad</label>
                                                <input type="date" class="form-control" name="expire_date" value="{{ old('expire_date') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Precio de Compra</label>
                                                <input type="text" class="form-control" name="buying_price" value="{{ old('buying_price') }}" placeholder="Ingresar precio de compra">
                                            </div>
                                            <div class="form-group">
                                                <label>Precio de Venta</label>
                                                <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}" placeholder="Ingresar Precio de Venta">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Agregar Producto</button>
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