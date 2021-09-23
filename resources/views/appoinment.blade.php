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
            <form action="">
                <div class="card">
                <div class="card-header lead">{{ $date }}</div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($times as $time)
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary" for="">
                                <input type="radio" name="status" value="1">
                                <span>{{ $time->time }}</span>
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" style="width: 100%">Book Appointment</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
