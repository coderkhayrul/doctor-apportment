@extends('admin.layouts.master')
@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>list Of All Departments</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Department</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Data Table</h3>
            </div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th>Department</th>
                            <th>Action</th>
                            {{-- <th class="nosort">&nbsp;</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $departments as $department )
                        <tr>
                            <td>{{ $department->department }}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('doctor.edit', $department->id) }}"><i class="ik ik-edit-2"></i></a>
                                    <a href="{{ route('doctor.show', $department->id) }}"><i class="ik ik-trash-2"></i></a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <td>Departments Not Available</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
