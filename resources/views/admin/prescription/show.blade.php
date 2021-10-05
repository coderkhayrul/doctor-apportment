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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> Patient Information</div>

            <div class="card-body">
                <p>Date: {{ $prescription->date }}</p>
                <p>Patient: {{ $prescription->user->name }}</p>
                <p>Doctor: {{ $prescription->doctor->name }}</p>
                <p>Disease: {{ $prescription->date }}</p>
                <p>Symptoms: {{ $prescription->symptoms }}</p>
                <p>Medicine: {{ $prescription->medicien }}</p>
                <p>Procedure To Use Medicine: {{ $prescription->procedure_to_use_medicine }}</p>
                <p>Feedback: {{ $prescription->feedback }}</p>
                <p>Doctor Signature: {{ $prescription->signature }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
