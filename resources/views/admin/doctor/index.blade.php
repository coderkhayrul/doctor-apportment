@extends('admin.layouts.master')
@section('content')
<div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Doctors</h5>
                                            <span>list Of All Doctors</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Doctors</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">View</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
    <div class="card-header">
        <h3>Data Table</h3>
    </div>
    <div class="card-body">
        <table id="data_table" class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="nosort">Avatar</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                    <th class="nosort">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $doctors as $doctor )
                    <tr>
                    <td>{{ $doctor->name }}</td>
                    <td><img src="{{ asset('upload').'/'.$doctor->image }}" alt="Doctor Image"class="table-user-thumb" alt=""></td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{$doctor->phone_number}}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>
                        <div class="table-actions">
                            <a href="#"><i class="ik ik-eye"></i></a>
                            <a href="#"><i class="ik ik-edit-2"></i></a>
                            <a href="#"><i class="ik ik-trash-2"></i></a>
                        </div>
                    </td>
                </tr>
                @empty
                <td>Doctor Not Available</td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
        </div>
    </div>
@endsection

