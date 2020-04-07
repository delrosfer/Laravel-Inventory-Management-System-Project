@extends('layouts.backend.app')

@section('title', 'Show Product')

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
                            <li class="breadcrumb-item active">Mostrar Producto</li>
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
                                <h3 class="card-title">Mostrar Producto</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <p>{{ $product->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Imagen</label>
                                                <p>
                                                    <img width="50" height="50" src="{{ URL::asset("storage/product/".$product->image) }}" alt="{{ $product->name }}">
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Categoria</label>
                                                <p>{{ $product->category->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Proveedor</label>
                                                <p>{{ $product->supplier->name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Codigo</label>
                                                <p>{{ $product->code }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Almacen</label>
                                                <p>{{ $product->garage }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Ubicación</label>
                                                <p>{{ $product->route }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha Compra</label>
                                                <p>{{ $product->buying_date->toFormattedDateString() }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha Caducidad</label>
                                                <p>{{ $product->expire_date->toFormattedDateString() }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio de Compra</label>
                                                <p>{{ number_format($product->buying_price, 2) ." Pesos" }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Precio de Venta</label>
                                                <p>{{ number_format($product->selling_price, 2) ." Pesos" }}</p>
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