@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">My Prescription</div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Desease</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Medicine</th>
                                <th scope="col">Procedure To Use Medicine</th>
                                <th scope="col">Doctor Feedback</th>
                            </tr>
                            <tbody>
                                @forelse ($prescriptions as $prescription)
                                    <tr>
                                        <td>{{ $prescription->date }}</td>
                                        <td>{{ $prescription->doctor->name }}</td>
                                        <td>{{ $prescription->name_of_disease }}</td>
                                        <td>{{ $prescription->symptoms }}</td>
                                        <td>{{ $prescription->medicien }}</td>
                                        <td>{{ $prescription->procedure_to_use_medicine }}</td>
                                        <td>{{ $prescription->feedback }}</td>
                                    </tr>
                                @empty
                                    <th>You Have No Prescriptions</th>
                                @endforelse

                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
