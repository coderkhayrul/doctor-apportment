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
                        @forelse ( $users as $user )
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>
                                <img src="{{ asset('upload').'/'.$user->image }}" alt="user Image"
                                    class="table-user-thumb" alt="">
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $user->id }}">
                                        <i class="ik ik-eye"></i></a>
                                    <a href="{{ route('doctor.edit', $user->id) }}"><i class="ik ik-edit-2"></i></a>
                                    <a href="{{ route('doctor.show', $user->id) }}"><i class="ik ik-trash-2"></i></a>
                                </div>
                            </td>
                        </tr>
                        @include('admin.doctor.model')
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
