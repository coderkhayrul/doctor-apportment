@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor Information</h4>
                    <img src="/banner/doctor.jpg" class="img-responsive" alt="Doctor Image" style="border-radius: 50%;"
                        width="100px">
                    <br>
                    <p>
                        Name:
                    </p>
                    <p>
                        Expertise:
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ $date }}</div>

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
        </div>
    </div>
</div>
@endsection
