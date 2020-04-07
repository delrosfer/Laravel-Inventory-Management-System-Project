@extends('layouts.backend.app')

@section('title', 'Invoice')

@push('css')
    <style>
        .modal-lg {
            max-width: 50% !important;
        }
    </style>
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Factura</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Factura</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fa fa-globe"></i> {{ config('app.name') }}
                                        <small class="float-right">Fecha: {{ date('l, d-M-Y h:i:s A') }}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    De
                                    <address>
                                        <strong>Admin, {{ config('app.name') }}</strong><br>
                                        {{ $company->address }}<br>
                                        {{ $company->city }} - {{ $company->zip_code }}, {{ $company->country }}<br>
                                        Phone: (+052) {{ $company->mobile }} {{ $company->phone !== null ? ', +88'.$company->phone : ''  }}<br>
                                        Email: {{ $company->email }}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    Para
                                    <address>
                                        <strong>{{ $customer->name }}</strong><br>
                                        {{ $customer->address }}<br>
                                        {{ $customer->city }}<br>
                                        Phone: (+052) {{ $customer->phone }}<br>
                                        Email: {{ $customer->email }}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Fecha de Pago:</b> {{ date('l, d-M-Y h:i:s A') }}<br>
                                    <b>Estado del Pedido:</b> <span class="badge badge-warning">Pendiente</span><br>
                                    <b>Cuenta:</b> {{ $customer->account_number }}
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Artículo</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contents as $content)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $content->name }}</td>
                                                    <td>{{ $content->qty }}</td>
                                                    <td>{{ number_format($content->price, 2) }}</td>
                                                    <td>{{ $content->subtotal() }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-8"></div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td class="text-right">{{ Cart::subtotal() }}</td>
                                            </tr>
                                            <tr>
                                                <th>Iva (16%)</th>
                                                <td class="text-right">{{ Cart::tax() }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td class="text-right">{{ Cart::total() }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="{{ route('admin.invoice.print', $customer->id) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success float-right"><i class="fa fa-credit-card"></i>
                                        Emitir Pago
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!--payment modal -->
    <form action="{{ route('admin.invoice.final_invoice') }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Factura de {{ $customer->name }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-info float-right mb-3">Total a Pagar: {{ Cart::total() }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Metodo de Pago</label>
                                <select name="payment_status" class="form-control" required >
                                    <option value="" disabled selected>Seleccionar Metodo de Pago</option>
                                    <option value="HandCash">Efectivo</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Due">Credito</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">Pagar</label>
                                <input type="number" name="pay" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Emitir</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--/.payment modal -->



@endsection



@push('js')

@endpush