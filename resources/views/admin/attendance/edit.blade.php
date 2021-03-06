@extends('layouts.backend.app')

@section('title', 'Update Attendance')

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
                            <li class="breadcrumb-item active">Actualizar Asistencia</li>
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
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Actualizar Asistencia</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.attendance.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <h2 class="text-center my-4 text-bold text-primary">Fecha : {{ date('l, d F Y', strtotime($date)) }}</h2>
                                    <div class="row">
                                        <table class="table table-striped table-bordered text-center">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nombre</th>
                                                <th>foto</th>
                                                <th>Asistencia</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <form action="{{ route('admin.attendance.att_update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                @foreach($attendances as $key => $attendance)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{{ $attendance->employee->name }}</td>
                                                        <td>
                                                            <img width="40" height="40" class="img-fluid img-rounded" src="{{ URL::asset('storage/employee/'. $attendance->employee->photo) }}" alt="{{ $attendance->employee->name }}">
                                                        </td>
                                                        <input type="hidden" name="id[]" value="{{ $attendance->id }}">
                                                        <td>
                                                            <input type="radio" name="attendance[{{ $attendance->id }}]" value="1" {{ $attendance->attendance == 1 ? 'checked' : '' }} required>Presente
                                                            <input type="radio" name="attendance[{{ $attendance->id }}]" value="0" {{ $attendance->attendance == 0 ? 'checked' : '' }}>Ausente
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </form>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Actualizar Asistencia</button>
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