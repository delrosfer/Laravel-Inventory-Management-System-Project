@extends('layouts.backend.app')

@section('title', 'Suppliers')

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
                            <li class="breadcrumb-item active">Proveedor</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Proveedores</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center table-responsive-xl">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Correo Electr.</th>
                                        <th>Telefono</th>
                                        <th>Domicilio</th>
                                        <th>Ciudad</th>
                                        <th>Tipo</th>
                                        <th>Nombre de Tienda</th>
                                        <th>Titular de la Cuenta</th>
                                        <th>No. de Cuenta</th>
                                        <th>Nombre del Banco</th>
                                        <th>Sucursal Bancaria</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Correo Electr.</th>
                                        <th>Telefono</th>
                                        <th>Domicilio</th>
                                        <th>Ciudad</th>
                                        <th>Tipo</th>
                                        <th>Nombre de Tienda</th>
                                        <th>Titular de la cuenta</th>
                                        <th>No. de Cuenta</th>
                                        <th>Nombre del Banco</th>
                                        <th>Sucursal Bancaria</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($suppliers as $key => $supplier)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>
                                                <img class="img-rounded" style="height:35px; width: 35px;" src="{{ URL::asset("storage/supplier/".$supplier->photo) }}" alt="{{ $supplier->name }}">
                                            </td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>0{{ $supplier->phone }}</td>
                                            <td>{{ $supplier->address }}</td>
                                            <td>{{ $supplier->city }}</td>
                                            <td>
                                                @if($supplier->type == 1)
                                                    {{ 'Distribuidor' }}
                                                @elseif($supplier->type == 2)
                                                    {{ 'Mayorista' }}
                                                @elseif($supplier->type == 3)
                                                    {{ 'Minorista' }}
                                                @else
                                                    {{ 'Ninguno' }}
                                                @endif
                                            </td>
                                            <td>{{ $supplier->shop_name }}</td>
                                            <td>{{ $supplier->account_holder }}</td>
                                            <td>{{ $supplier->account_number }}</td>
                                            <td>{{ $supplier->bank_name }}</td>
                                            <td>{{ $supplier->bank_branch }}</td>
                                            <td>
                                                <a href="{{ route('admin.supplier.show', $supplier->id) }}" class="btn btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('admin.supplier.edit', $supplier->id) }}" class="btn
													btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteItem({{ $supplier->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <form id="delete-form-{{ $supplier->id }}" action="{{ route('admin.supplier.destroy', $supplier->id) }}" method="post"
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
                "autoWidth": true
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
                text: "No podrá revertirlo!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'No, Cancelar!',
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
                        'Su información está segura :)',
                        'error'
                    )
                }
            })
        }
    </script>



@endpush