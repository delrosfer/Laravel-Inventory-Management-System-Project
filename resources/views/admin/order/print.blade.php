<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Invoice - {{ config('app.name', 'Inventory Management System') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/backend/img/policymaker.ico') }}" type="image/x-icon" />

</head>

<body>
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
                                Telefono: (+052) {{ $company->mobile }} {{ $company->phone !== null ? ', +052'.$company->phone : ''  }}<br>
                                Correo E: {{ $company->email }}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Para
                            <address>
                                <strong>{{ $order->customer->name }}</strong><br>
                                {{ $order->customer->address }}<br>
                                {{ $order->customer->city }}<br>
                                Telefono: (+052) {{ $order->customer->phone }}<br>
                                Correo E: {{ $order->customer->email }}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Factura #IMS-{{ $order->created_at->format('Ymd') }}{{ $order->id }}</b><br><br>
                            <b>No. de Orden:</b> {{ str_pad($order->id,9,"0",STR_PAD_LEFT) }}<br>
                            <b>Estatus de Orden:</b> <span class="badge {{ $order->order_status == 'approved' ? 'badge-success' : 'badge-warning'  }}">{{ $order->order_status }}</span><br>
                            <b>Cuenta:</b> {{ $order->customer->account_number }}
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
                                    <th>No.</th>
                                    <th>Descripcion de Producto</th>
                                    <th>Codigo de Producto</th>
                                    <th>Cantidad</th>
                                    <th>Costo Unitario</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order_details as $order_detail)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order_detail->product->name }}</td>
                                        <td>{{ $order_detail->product->code }}</td>
                                        <td>{{ $order_detail->quantity }}</td>
                                        <td>{{ $unit_cost = number_format($order_detail->unit_cost, 2) }}</td>
                                        <td>{{ number_format($unit_cost * $order_detail->quantity, 2) }}</td>
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
                        <div class="col-4">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width:50%">Forma de pago:</th>
                                        <td class="text-right">{{ $order->payment_status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pago</th>
                                        <td class="text-right">{{ number_format($order->pay, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Due</th>
                                        <td class="text-right">{{ number_format($order->due, 2) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4 offset-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td class="text-right">{{ number_format($order->sub_total, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Iva (16%)</th>
                                        <td class="text-right">{{ number_format($order->vat, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td class="text-right">{{ round($order->total) }} Pesos</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- /.content -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('assets/backend/js/adminlte.js') }}"></script>

<script>
    window.print();
</script>

</body>

</html>
