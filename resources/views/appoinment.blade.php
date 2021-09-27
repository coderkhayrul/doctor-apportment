@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor Information</h4>
                    <img src="{{ asset('upload',).'/'.$user->image }}" class="img-responsive" alt="Doctor Image" style="border-radius: 50%;"
                        width="100px">
                    <br>
                    <p class="lead">
                        Name: {{ Str::ucfirst($user->name) }}
                    </p>
                    <p class="lead">
                        Degree: {{ $user->education }}
                    </p>
                    <p class="lead">
                        Specialist: {{ $user->department }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Form Validation Error Message -->
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
            <!-- Booking Error Message -->
            @if (Session::has('errormessage'))
                <div class="alert alert-warning">
                    {{ Session::get('errormessage') }}
                </div>
            @endif
            <!-- Success Message -->
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <form action="{{ route('book.appointment') }}" method="post">
                @csrf
                <div class="card">
                <div class="card-header lead">{{ $date }}</div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($times as $time)
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary" for="">
                                <input type="radio" name="time" value="{{ $time->time }}">
                                <span>{{ $time->time }}</span>
                            </label>
                        </div>
                        <input type="hidden" name="doctorId" value="{{ $doctorId}}">
                        <input type="hidden" name="appointment_id" value="{{ $time->appointment_id }}">
                        <input type="hidden" name="date" value="{{ $date }}">

                        @endforeach

                    </div>
                </div>
            </div>
            <div class="card-footer">
                    @auth
                        <button type="submit" class="btn btn-success" style="width: 100%">Book Appointment</button>
                    @endauth
                    @guest
                        <p>Please login to make an appointment.</p>
                        <a class="btn btn-success" href="/register">Register</a>
                        <a class="btn btn-primary" href="/login">Login</a>
                    @endguest
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
