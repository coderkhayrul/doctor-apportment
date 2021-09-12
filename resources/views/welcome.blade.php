@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="/banner/online-medicine-concept_160901-152.jpg" alt=""
                style="border:1px solid #ccd; ">
        </div>
        <div class="col-md-6">
            <h2>Create an account & Book your appointment</h2>
            <p>Laboris nostra cras autem, ullam ducimus nobis, auctor perspiciatis nam, morbi vero, dolorum cursus duis
                sociis asperiores quasi, maecenas rerum nostrud dicta pariatur commodi mattis ducimus sint suspendisse,
                atque egestas ridiculus similique.</p>
            <div class="mt-5">
                <button class="btn btn-success">Register ad Patient</button>
                <button class="btn btn-secondary">Login</button>
            </div>
        </div>
    </div>
    <hr>
    <!-- Search Doctor -->
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Find Doctors
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" placeholder="" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Find Doctors</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Display Doctors -->
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Doctors
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img width="80px" style="border-radius: 50% "
                                    src="{{ asset('template/img/users/4.jpg') }}" alt="">
                            </td>
                            <td>Name Of Doctor</td>
                            <td>Name Of Department</td>
                            <td>
                                <button class="btn btn-success">Book Appointment</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
