@extends('layouts.backend.app')

@section('title')
    {{ date('F') . 'Expenses' }}
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">{{  date('F') }} Gastos</li>
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
                        <div class="mb-3">
                            <a href="{{ route('admin.expense.month', 'january') }}" class="btn btn-info">Enero</a>
                            <a href="{{ route('admin.expense.month', 'february') }}" class="btn btn-primary">Febrero</a>
                            <a href="{{ route('admin.expense.month', 'march') }}" class="btn btn-secondary">Marzo</a>
                            <a href="{{ route('admin.expense.month', 'april') }}" class="btn btn-warning">Abril</a>
                            <a href="{{ route('admin.expense.month', 'may') }}" class="btn btn-info">Mayo</a>
                            <a href="{{ route('admin.expense.month', 'june') }}" class="btn btn-success">Junio</a>
                            <a href="{{ route('admin.expense.month', 'july') }}" class="btn btn-danger">Julio</a>
                            <a href="{{ route('admin.expense.month', 'august') }}" class="btn btn-primary">Agosto</a>
                            <a href="{{ route('admin.expense.month', 'september') }}" class="btn btn-info">Septiembre</a>
                            <a href="{{ route('admin.expense.month', 'october') }}" class="btn btn-secondary">Octubre</a>
                            <a href="{{ route('admin.expense.month', 'november') }}" class="btn btn-warning">Noviembre</a>
                            <a href="{{ route('admin.expense.month', 'december') }}" class="btn btn-danger">Diciembre</a>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <strong class="text-danger">{{ strtoupper($month) }}</strong> LISTA DE GASTOS
                                    <small class="text-danger pull-right">Total Gastos : {{ $expenses->sum('amount') }} Pesos</small>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Descripcion del Gasto</th>
                                        <th>Monto</th>
                                        <th>Mes</th>
                                        <th>Accion</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Descripcion del Gasto</th>
                                        <th>Monto</th>
                                        <th>Mes</th>
                                        <th>Accion</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($expenses as $key => $expense)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $expense->name }}</td>
                                            <td>{{ number_format($expense->amount, 2) }}</td>
                                            <td>{{ $expense->date->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('admin.expense.edit', $expense->id) }}" class="btn
													btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteItem({{ $expense->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <form id="delete-form-{{ $expense->id }}" action="{{ route('admin.expense.destroy', $expense->id) }}" method="post"
                                                      style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
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
    </div> <!-- Content Wrapper end -->
@endsection




@push('js')

    <!-- DataTables -->
    <script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('assets/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/backend/plugins/fastclick/fastclick.js') }}"></script>

    <!-- Sweet Alert Js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.1/dist/sweetalert2.all.min.js"></script>


    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>


    <script type="text/javascript">
        function deleteItem(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: '¿Está Seguro?',
                text: "No podra revertir esto!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelado',
                        'Sus datos estan seguros :)',
                        'error'
                    )
                }
            })
        }
    </script>



@endpush