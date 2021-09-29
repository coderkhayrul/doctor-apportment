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
                <a href="{{ route('register') }}" class="btn btn-success">Register ad Patient </a>
                <a href="{{ route('login') }}" class="btn btn-secondary">Login </a>
            </div>
        </div>
    </div>
    <hr>
    <!-- Date Picker Components -->
    <find-doctor></find-doctor>

</div>
@endsection
